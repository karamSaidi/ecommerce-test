<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Jobs\CategoryImageResizeJob;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::parents()->latest('id')->paginate(config('general.paginate_number'));
        return view('admin.maincategories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maincategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $data = $request->only('name', 'status');
            if ($request->has('image')) {

                $data['image'] = upload_file($request->image, 'categories')['file_path'];
                // resize image in background
                dispatch(new CategoryImageResizeJob('categories', $data['image']));
            }
            $data['slug'] = Str::slug($data['name']);
            Category::create($data);
            return redirect()->route('admin.main_categories')
                ->with(['success' => __('general.created_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.main_categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.main_categories')
                    ->with(['error' => __('general.not_found')]);

            return view('admin.maincategories.edit', compact('category'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.main_categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.main_categories')
                    ->with(['error' => __('general.not_found')]);

            $data = $request->only('name', 'status');
            if ($request->has('image')) {
                // delete old image
                if ($category->image)
                    delete_storage_file('categories', $category->image);

                $data['image'] = upload_file($request->image, 'categories')['file_path'];
                // resize image in background
                dispatch(new CategoryImageResizeJob('categories', $data['image']));
            }
            $data['slug'] = Str::slug($data['name']);
            $category->update($data);
            return redirect()->route('admin.main_categories')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.main_categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::where('id', $id)->first();
            if (!$category)
                return redirect()->route('admin.main_categories')
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
            return redirect()->route('admin.main_categories')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
