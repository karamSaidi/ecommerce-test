<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShippginRequest;
use App\Models\Admin\Setting;
use Illuminate\Support\Str;

class SettingController extends Controller
{

    /*********************** shipping */
    public function edit_shipping($type = 'free')
    {
        try {
            $type = Str::lower(trim($type));
            $type_request = (in_array($type, ['free', 'local', 'outer']) ? $type : 'free') . '_shipping_label';
            $shipping =  Setting::where('key', $type_request)->first();
            return view('admin.setting.shipping.edit', compact('shipping'));
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.setting.shipping.edit', 'free')
                ->with(['error' => __('general.error_happen')]);
        }
    }
    /*********************** ./shipping */


    public function update_shipping(ShippginRequest $request, $id)
    {
        try {
            $shipping =  Setting::where('id', $id)->first();
            $shipping->update($request->all());
            return redirect()->back()->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.setting.shipping.edit', 'free')
                ->with(['error' => __('general.error_happen')]);
        }
    } // ./update_shipping


}// ./ SettingController
