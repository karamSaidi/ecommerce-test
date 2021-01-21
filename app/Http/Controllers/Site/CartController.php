<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{

    public function index()
    {

    }// ./index


    public function add_to_cart($slug)
    {
        try {
            $product = Product::whereHas('translation', function ($product) use ($slug) {
                $product->where('slug', $slug);
            })->first();
            if (!$product) {
                return redirect()->route('home')->with(['error' => __('general.not_found')]);
            }

           return Cart::add($product->id, $product->name, -1, $product->price, 0)
                ->associate('App/Model/Product');

            return Cart::content()?? 0;
        }
        catch(\Exception $ex)
        {
            return $ex;
        }

    }// ./add

}// ./cartcontroller
