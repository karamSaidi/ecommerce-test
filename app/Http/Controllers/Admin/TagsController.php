<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Jobs\TagImageResizeJob;
use App\Models\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = Tag::latest('id')->paginate(config('general.paginate_number'));
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        try {
            $data = $request->all();

            Tag::create($data);

            return redirect()->route('admin.tags')
                ->with(['success' => __('general.created_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tags')
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
            $tag = Tag::where('id', $id)->first();
            if (!$tag)
                return redirect()->route('admin.tags')
                    ->with(['error' => __('general.not_found')]);

            return view('admin.tags.edit', compact('tag'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tags')
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
    public function update(TagRequest $request, $id)
    {
        try {
            $tag = Tag::where('id', $id)->first();
            if (!$tag)
                return redirect()->route('admin.tags')
                    ->with(['error' => __('general.not_found')]);

            $data = $request->all();

            $tag->update($data);
            return redirect()->route('admin.tags')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tags')
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
            $tag = Tag::where('id', $id)->first();
            if (!$tag)
                return redirect()->route('admin.tags')
                    ->with(['error' => __('general.not_found')]);

            $tag->delete();
            return redirect()->back()
                ->with(['success' => __('general.deleted_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tags')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
