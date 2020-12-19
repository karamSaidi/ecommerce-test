<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product_details($slug)
    {
        $product =  Product::whereHas('translation', function($q) use($slug){
            $q->where('slug', $slug);
        })->with(['brand', 'categories', 'tags', 'images'])->first();

        if(!$product){
            return redirect()->route('home')->with(['error' => __('general.not_found')]);
        }

        $data = [];
        $data['sliders'] = Slider::latest('id')->get();
        $data['homeCategories'] = Category::parents()->active()->select('id', 'image')->with(['childs' => function($q){
            $q->select('id', 'parent_id')->active()->with(['childs' => function($q2){
                $q2->select('id', 'parent_id')->active();
            }]);
        }])->get();

        $data['product'] = $product;

        $product_id = $data['product']->id;
        $data['product_attributes'] = Attribute::select('id')
        ->whereHas('options', function($options) use($product_id){
            $options->where('product_id', $product_id);
        })->with(['options' => function($options){
            $options->select('id', 'attribute_id');
        }])->get();

        $categoriesId = $data['product']->categories()->pluck('id');
        $data['products_related'] = Product::where('id', '!=', $product->id)
        ->whereHas('categories', function($categories) use($categoriesId){
            $categories->whereIn('category_id', $categoriesId);
        })
        ->with(['categories', 'images'])
        ->latest('id')->take(config('general.paginate_number'))->get();

        return view('site.product_details', $data);


    }

}// ./ProductController
