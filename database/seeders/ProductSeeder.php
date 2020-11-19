<?php

namespace Database\Seeders;

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

        \App\Models\Product::factory(150)->create();
    }
}
