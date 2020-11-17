<?php

namespace Database\Seeders;

use App\Jobs\CategoryImageResizeJob;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all files in a directory
        $files =   Storage::disk('categories')->allFiles('');

        // Delete Files
        Storage::disk('categories')->delete($files);

        // \App\Models\Category::factory(15)->create();
        // \App\Models\Category::factory(35)->create();
        $this->fakeData(10);
        $this->fakeData(30);
    }

    private function fakeData($count)
    {

        $faker_ar = Factory::create('ar_SA');
        $faker_en = Factory::create('en_US');
        // $faker_fr = Factory::create('fr_FR');

        $categories_id = collect(Category::select('id')->get()->modelKeys());

        $tmp_images = collect(Storage::disk('public')->files('background'));


        for ($i = 0; $i < $count; $i++) {
            $name_ar = $faker_ar->unique()->name(random_int(1, 5));
            $name_en = $faker_en->unique()->name(random_int(1, 5));

            $slug = Str::slug($name_en);


            $temp = $tmp_images->random();
            $image = "$slug.jpg";
            Storage::disk('categories')->put($image, Storage::disk('public')->get($temp));
            dispatch(new CategoryImageResizeJob('categories', $image));

            $data = [
                'image' => $image,
                'status' => $faker_en->boolean(),
                'en' => ['name' => $name_en],
                'ar' => ['name' => $name_ar],
            ];
            if (count($categories_id) > 0) {
                $data['parent_id'] = $categories_id->random();
            }
            Category::create($data);
        }
    }
}
