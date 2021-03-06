<?php

namespace Database\Seeders;

use App\Models\Tag;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
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
            $name_ar = $faker_ar->unique()->name(random_int(1, 3));
            $name_en = $faker_en->unique()->name(random_int(1, 3));


            $data = [
                'status' => $faker_en->boolean(),
                'en' => ['name' => $name_en],
                'ar' => ['name' => $name_ar],
            ];

            Tag::create($data);
        }
    }
}
