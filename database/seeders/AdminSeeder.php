<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all files in a directory
        $files =   Storage::disk('admin')->allFiles('');

        // Delete Files
        Storage::disk('admin')->delete($files);

        $admin = Admin::create([
            'name' => 'site administrator',
            'email' => 'admin@test.com',
            'password' => bcrypt('adminadmin'),
            'email_verified_at' => now()
        ]);
    }
}
