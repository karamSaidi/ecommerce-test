<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Jobs\BrandImageResizeJob;
use App\Models\Brand;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brands = Brand::latest('id')->paginate(config('general.paginate_number'));
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        try {
            $data = $request->except('image');
            if ($request->has('image')) {

                $data['image'] = upload_file($request->image, 'brands')['file_path'];
                // resize image in background
                dispatch(new BrandImageResizeJob('brands', $data['image']));
            }

            Brand::create($data);

            return redirect()->route('admin.brands')
                ->with(['success' => __('general.created_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.brands')
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
            $brand = Brand::where('id', $id)->first();
            if (!$brand)
                return redirect()->route('admin.brands')
                    ->with(['error' => __('general.not_found')]);

            return view('admin.brands.edit', compact('brand'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.brands')
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
    public function update(BrandRequest $request, $id)
    {
        try {
            $brand = Brand::where('id', $id)->first();
            if (!$brand)
                return redirect()->route('admin.brands')
                    ->with(['error' => __('general.not_found')]);

            $data = $request->except('image');

            if ($request->has('image')) {
                // delete old image
                if ($brand->image)
                    delete_storage_file('brands', $brand->image);

                $data['image'] = upload_file($request->image, 'brands')['file_path'];
                // resize image in background
                dispatch(new BrandImageResizeJob('brands', $data['image']));
            }
            $brand->update($data);
            return redirect()->route('admin.brands')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.brands')
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
            $brand = Brand::where('id', $id)->first();
            if (!$brand)
                return redirect()->route('admin.brands')
                    ->with(['error' => __('general.not_found')]);

            if ($brand->image) {
                // delete old image
                if ($brand->image)
                    delete_storage_file('brands', $brand->image);
            }
            $brand->delete();
            return redirect()->back()
                ->with(['success' => __('general.deleted_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.brands')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
