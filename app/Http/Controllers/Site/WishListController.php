<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class WishListController extends Controller
{


    public function index()
    {
        $data = [];
        $data['sliders'] = Slider::latest('id')->get();
        $data['homeCategories'] = Category::parents()->active()->select('id', 'image')->with(['childs' => function($q){
            $q->select('id', 'parent_id')->active()->with(['childs' => function($q2){
                $q2->select('id', 'parent_id')->active();
            }]);
        }])->get();
        $data['wishlist'] = auth()->user()->wishlists()->with(['categories' => function($categories){
            $categories->select('id');
        }])->paginate(config('general.paginate_number'));
        return view('site.wishlist', $data);

    }



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


}// end controller
