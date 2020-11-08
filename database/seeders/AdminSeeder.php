<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'site administrator',
            'email' => 'admin@test.com',
            'password' => bcrypt('adminadmin'),
            'email_verified_at' => now()
        ]);
    }
}
