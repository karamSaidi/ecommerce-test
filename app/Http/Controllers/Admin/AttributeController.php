<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttributeRequest;
use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::latest('id')->paginate(config('general.paginate_number'));
        return view('admin.attributes.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeRequest $request)
    {
        try {
            $data = $request->only('name');

            Attribute::create($data);

            return redirect()->route('admin.attributes')
                ->with(['success' => __('general.created_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.attributes')
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
            $attribute = Attribute::where('id', $id)->first();
            if (!$attribute)
                return redirect()->route('admin.attributes')
                    ->with(['error' => __('general.not_found')]);

            return view('admin.attributes.edit', compact('attribute'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.attributes')
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
    public function update(AttributeRequest $request, $id)
    {
        try {
            $attribute = Attribute::where('id', $id)->first();
            if (!$attribute)
                return redirect()->route('admin.attributes')
                    ->with(['error' => __('general.not_found')]);

            $data = $request->only('name');

            $attribute->update($data);
            return redirect()->route('admin.attributes')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.attributes')
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
            $attribute = Attribute::where('id', $id)->first();
            if (!$attribute)
                return redirect()->route('admin.attributes')
                    ->with(['error' => __('general.not_found')]);

            if ($attribute->image) {
                // delete old image
                if ($attribute->image)
                    delete_storage_file('attributes', $attribute->image);
            }
            $attribute->delete();
            return redirect()->back()
                ->with(['success' => __('general.deleted_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.attributes')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
