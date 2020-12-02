<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Get all files in a directory
        $files =   Storage::disk('sliders')->allFiles('');

        // Delete Files
        Storage::disk('sliders')->delete($files);

        $tmp_images = collect(Storage::disk('public')->files('background'));

        for ($i = 0; $i < 4; $i++) {
            $temp = $tmp_images->random();
            $image  = "slider_$i.jpg";
            Storage::disk('sliders')->put($image, Storage::disk('public')->get($temp));

            $images[] = ['image' => $image];
            Slider::create(['image' => $image]);
        }



    }
}
