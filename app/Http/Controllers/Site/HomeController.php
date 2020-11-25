<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $data = [];
        $data['sliders'] = Slider::latest('id')->get();
        return view('site.home', $data);
    }

}
