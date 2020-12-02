<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{


    public function store()
    {
        if(!auth()->user()->hasWishList(request()->product_id)){
            auth()->user()->wishLists()->attach(['product_id' => request()->product_id]);
            return response()->json(['status' => true, 'action' => 'add', 'msg' => 'done']);
        }
        else{
            auth()->user()->wishLists()->detach(['product_id' => request()->product_id]);
            return response()->json(['status' => true, 'action' => 'remove', 'msg' => 'done']);
        }
    }


}
