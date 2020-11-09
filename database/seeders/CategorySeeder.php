<?php

namespace Database\Seeders;

use Database\Factories\SubCategoryFactory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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

        \App\Models\Category::factory(15)->create();
        \App\Models\Category::factory(35)->create();
    }
}
