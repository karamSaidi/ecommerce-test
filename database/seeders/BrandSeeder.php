<?php

namespace Database\Seeders;

use App\Jobs\BrandImageResizeJob;
use App\Models\Brand;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fakeData(30);
    }

    private function fakeData($count)
    {

        $faker_ar = Factory::create('ar_SA');
        $faker_en = Factory::create('en_US');
        // $faker_fr = Factory::create('fr_FR');





        for ($i = 0; $i < $count; $i++) {
            $name_ar = $faker_ar->unique()->name(random_int(2, 10));
            $name_en = $faker_en->unique()->name(random_int(2, 10));

            $slug = Str::slug($name_en);

            $tmp_images = collect(Storage::disk('public')->files('background'));
            $temp = $tmp_images->random();
            $image = "$slug.jpg";
            Storage::disk('brands')->put($image, Storage::disk('public')->get($temp));
            dispatch(new BrandImageResizeJob('brands', $image));

            $data = [
                'image' => $image,
                'status' => $faker_en->boolean(),
                'en' => ['name' => $name_en],
                'ar' => ['name' => $name_ar],
            ];

            Brand::create($data);
        }
    }
}
