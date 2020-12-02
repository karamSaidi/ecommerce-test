<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all files in a directory
        $files =   Storage::disk('products')->allFiles('');

        // Delete Files
        Storage::disk('products')->delete($files);

        // \App\Models\Product::factory(150)->create();
        $this->newProductSeed(300);
    }


    private function newProductSeed(int $count)
    {
        $faker = Factory::create('en_US');
        $tmp_images = collect(Storage::disk('public')->files('background'));
        $brands_id = collect(Brand::select('id')->get()->modelKeys());

        for ($i = 0; $i < $count; $i++) {
            $data = [
                'name' => $faker->unique()->text(60),
                'short_description' => $faker->paragraph(3),
                'description' => $faker->paragraph(10),
                'price' => $faker->numberBetween(10, 9000),
                'sku' => $faker->word(),
                'manage_stock' => false,
                'in_stock' => $faker->boolean(),
                'status' => $faker->boolean(),
                'brand_id' => $brands_id->random(),
            ];
            $product = Product::create($data);

            $tags = Tag::InRandomOrder()->take(random_int(1, 3))->pluck('id')->toArray();
            $categories = Category::InRandomOrder()->take(random_int(1, 3))->pluck('id')->toArray();

            $product->categories()->sync($categories);
            $product->tags()->sync($tags);

            $images = [];
            $imageCount = random_int(1, 4);
            for ($j = 0; $j < $imageCount; $j++) {
                $temp = $tmp_images->random();
                $image  = $product->name . "_" . $product->id . "_" . $j . ".jpg";
                $images[] = ['image' => $image];
                Storage::disk('products')->put($image, Storage::disk('public')->get($temp));
            }
            $product->images()->createMany($images);


        }
    }
}
