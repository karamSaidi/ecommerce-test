<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderImageRequest;
use App\Http\Requests\Admin\SliderImageUploadRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {
        try {
            $sliders = Slider::get();

            return view('admin.sliders.index', compact('sliders'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.sliders')
            ->with(['error' => __('general.error_happen')]);
        }
    }

    public function saveSliderImage(SliderImageRequest $request)
    {
        try {
            DB::beginTransaction();
            $images = [];
            foreach(request()->images as $image){
                $images[] = ['image' => $image];
                Slider::create(['image' => $image]);
            }
            // Slider::createMany($images);
            DB::commit();
            return redirect()->route('admin.sliders')
                ->with(['success' => __('general.updated_success')]);

        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
            return redirect()->route('admin.products')
                ->with(['error' => __('general.error_happen')]);
        }
    }

    public function uploadSliderImage(SliderImageUploadRequest $request)
    {
        try {
            if ($request->has('dzfile')) {

                $data = upload_file($request->dzfile, 'sliders');
                // resize image in background
                // dispatch(new BrandImageResizeJob('brands', $data['image']));
                return response()->json([
                    'status' => true,
                    'name' => $data['file_path'],
                    ]);
            }
        } catch (\Exception $ex) {
            return response()->json(['status' => false, 'msg' => __('general.error_happen')]);
        }

    }
    public function removeSliderImage()
    {
        try {
            request()->validate(['name' => 'required|string']);
            delete_storage_file('sliders', request()->name);
            return response()->json(['status' => true, 'msg' => __('general.deleted_success')], 200);


        } catch (\Exception $ex) {
            return response()->json(['status' => false, 'msg' => __('general.error_happen'), 'ex' => $ex], 201);
        }

    }
    public function removeSliderImageFile($image_id)
    {
        try {
            $slider = Slider::where('id', $image_id)->first();
            if (!$slider)
                return redirect()->route('admin.sliders')
                ->with(['error' => __('general.not_found')]);

            $slider->delete();
            delete_storage_file('sliders', $slider->image);

            return redirect()->route('admin.sliders')->with('success',  __('general.deleted_success'));
        } catch (\Exception $ex) {
            return redirect()->route('admin.products')
            ->with(['error' => __('general.error_happen')]);
        }

    }


}
