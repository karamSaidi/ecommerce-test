<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;
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
}// ./ SettingController
