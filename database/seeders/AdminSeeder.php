<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\User;
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

        User::create([
            'name' => 'karam alsaidi',
            'mobile' => '0599907811',
            'password' => bcrypt('karam@123'),
            'verified_at' => now()
        ]);
    }
}
