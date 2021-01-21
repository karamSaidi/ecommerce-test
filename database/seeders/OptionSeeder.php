<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $products_id = Product::select('id')->get();
        // $attributes_id = Attribute::select('id')->whereHas('translations', function($attr){
        //     $attr -> whereIn('name', ['Color', 'Weight']);
        // })->get();

        $attribute_color_id = Attribute::select('id')->whereHas('translations', function($attr){
            $attr -> where('name', 'Color');
        })->first()->id;

        $attribute_weight_id = Attribute::select('id')->whereHas('translations', function($attr){
            $attr -> where('name', 'Weight');
        })->first()->id;

        $colors = ['red', 'black', 'blue', 'yellow', 'pink', 'green'];
        $weights = ['small', 'medium', 'large'];


        foreach($products_id as $product){
            $rand_color = array_rand($colors, random_int(2, 5));
            foreach($rand_color as $color){
                $product->options()->create([
                    'attribute_id' => $attribute_color_id,
                    'name' => $colors[$color],
                    'price' => 0
                    ]);
            }

            foreach($weights as $weight){
                $product->options()->create([
                    'attribute_id' => $attribute_weight_id,
                    'name' => $weight,
                    'price' => 0
                    ]);
            }
        }



    }

}
