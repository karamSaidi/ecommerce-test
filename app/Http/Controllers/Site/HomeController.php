<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $data = [];
        $data['sliders'] = Slider::latest('id')->get();
        $data['homeCategories'] = Category::parents()->active()->select('id', 'image')->with(['childs' => function($q){
            $q->select('id', 'parent_id')->active()->with(['childs' => function($q2){
                $q2->select('id', 'parent_id')->active();
            }]);
        }])->get();
        return view('site.home', $data);
    }


    public function categoryProducts($slug)
    {
        $data = [];
        $category = Category::active()->whereHas('translation', function($q) use($slug){
            $q->where('slug', $slug);
        })->first();
        if(!$category){
            return null;
        }

        $data['homeCategories'] = Category::parents()->active()->select('id', 'image')->with(['childs' => function($q){
            $q->select('id', 'parent_id')->active()->with(['childs' => function($q2){
                $q2->select('id', 'parent_id')->active();
            }]);
        }])->get();

        $data['category'] = $category;
        $data['products'] =  $this->getProducts($category->id);

        return view('site.category_products', $data);

    }

    private function getProducts($categoryId)
    {
        $subCategories =  Category::where('id', $categoryId)->select('id', 'image')->with(['childs' => function($q){
            $q->select('id', 'parent_id')->active()->with(['childs' => function($q2){
                $q2->select('id', 'parent_id')->active();
            }]);
        }])->get();
        $categoryIds = [];

        foreach($subCategories as $cat1){
            $categoryIds[] = $cat1->id;
            if(isset($cat1->childs)){
                foreach($cat1->childs as $cat2){
                    $categoryIds[] = $cat2->id;
                    if(isset($cat2->childs)){
                        foreach($cat2->childs as $cat3){
                            $categoryIds[] = $cat3->id;
                        }
                    }
                }
            }
        }

        return $products = Product::whereHas('categories', function($q) use ($categoryIds){
            $q->whereIn('category_id', array_unique($categoryIds));
        })
        ->select('id', 'price', 'special_price', 'in_stock', 'brand_id')
        ->with(['brand', 'images' => function($q){
            $q->select('id', 'image', 'product_id');
        }])->with(['categories' => function($categories){
            $categories->select('id');
        }])->paginate(config('general.site_paginate_number'));
    }





}
