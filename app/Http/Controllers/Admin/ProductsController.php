<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ProductGeneralRequest;
use App\Http\Requests\Admin\ProductPriceRequest;
use App\Http\Requests\Admin\ProductStockRequest;
use App\Jobs\CategoryImageResizeJob;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::latest('id')->select('id', 'price', 'status')->paginate(config('general.paginate_number'));
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $data['brands'] = Brand::active()->select('id')->get();
        $data['categories'] = Category::active()->select('id')->get();
        $data['tags'] = Tag::active()->select('id')->get();
        return view('admin.products.general.create', compact('data'));
    }


    public function store(ProductGeneralRequest $request)
    {
        try {

            DB::beginTransaction();
            $product = Product::create($request->only(['name', 'short_description', 'description', 'brand_id', 'status']));

            if($request->categories){
                $product->categories()->sync($request->categories);
            }
            if($request->tags){
                $product->tags()->sync($request->tags);
            }

            DB::commit();
            return redirect()->route('admin.products')
                ->with(['success' => __('general.created_success')]);

        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
            return redirect()->route('admin.products')
                ->with(['error' => __('general.error_happen')]);
        }
    }


    public function getProductPrice($product_id)
    {
        try {
            $product = Product::where('id', $product_id)
            ->select('id', 'price', 'special_price', 'special_price_start', 'special_price_end', 'special_price_type')->first();

            if (!$product)
                return redirect()->route('admin.products')
                ->with(['error' => __('general.not_found')]);

            return view('admin.products.price.create', compact('product'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.products')
            ->with(['error' => __('general.error_happen')]);
        }
    }

    public function saveProductPrice(ProductPriceRequest $request)
    {
        try {

            $product = Product::where('id', $request->product_id)->first();
            if (!$product)
                return redirect()->route('admin.products')
                ->with(['error' => __('general.not_found')]);

            $product->update($request->only(['product_id', 'price', 'special_price', 'special_price_start', 'special_price_end', 'special_price_type']));

            DB::commit();
            return redirect()->route('admin.products')
                ->with(['success' => __('general.updated_success')]);

        } catch (\Exception $ex) {

            dd($ex);
            return redirect()->route('admin.products')
                ->with(['error' => __('general.error_happen')]);
        }
    }


    public function getProductStock($product_id)
    {
        try {
            $product = Product::where('id', $product_id)
            ->select('id', 'sku','manage_stock','qty','in_stock')->first();

            if (!$product)
                return redirect()->route('admin.products')
                ->with(['error' => __('general.not_found')]);

            return view('admin.products.stock.create', compact('product'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.products')
            ->with(['error' => __('general.error_happen')]);
        }
    }


    public function saveProductStock(ProductStockRequest $request)
    {
        try {

            $product = Product::where('id', $request->product_id)->first();
            if (!$product)
                return redirect()->route('admin.products')
                ->with(['error' => __('general.not_found')]);

            $product->update($request->only(['sku','manage_stock','qty','in_stock']));

            DB::commit();
            return redirect()->route('admin.products')
                ->with(['success' => __('general.updated_success')]);

        } catch (\Exception $ex) {

            dd($ex);
            return redirect()->route('admin.products')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        try {
            $categories = Category::parents()->select('id')->get();
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.categories')
                    ->with(['error' => __('general.not_found')]);

            return view('admin.categories.edit', compact('category', 'categories'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }


    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.categories')
                    ->with(['error' => __('general.not_found')]);

            $data = $request->except('image');

            if ($request->has('image')) {
                // delete old image
                if ($category->image)
                    delete_storage_file('categories', $category->image);

                $data['image'] = upload_file($request->image, 'categories')['file_path'];
                // resize image in background
                dispatch(new CategoryImageResizeJob('categories', $data['image']));
            }
            $category->update($data);
            return redirect()->route('admin.categories')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.categories')
                    ->with(['error' => __('general.not_found')]);

            if ($category->image) {
                // delete old image
                if ($category->image)
                    delete_storage_file('categories', $category->image);
            }
            $category->delete();
            return redirect()->back()
                ->with(['success' => __('general.deleted_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
