<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   Attribute::create(         [
                'en' => ['name' => 'Color'],
                'ar' => ['name' => 'اللون'],],);
   Attribute::create(         [
                'en' => ['name' => 'Size'],
                'ar' => ['name' => 'بحجم'],],);
   Attribute::create(         [
                'en' => ['name' => 'Design'],
                'ar' => ['name' => 'التصميم'],],);
   Attribute::create(         [
                'en' => ['name' => 'Weight'],
                'ar' => ['name' => 'وزن'],],);
   Attribute::create(         [
                'en' => ['name' => 'Content'],
                'ar' => ['name' => 'المحتوى'],],);
   Attribute::create(         [
                'en' => ['name' => 'Smell'],
                'ar' => ['name' => 'رائحة'],],);
   Attribute::create(         [
                'en' => ['name' => 'Taste'],
                'ar' => ['name' => 'المذاق'],],);
   Attribute::create(         [
                'en' => ['name' => 'Feel'],
                'ar' => ['name' => 'يشعر'],],);
   Attribute::create(         [
                'en' => ['name' => 'Quantity'],
                'ar' => ['name' => 'كمية'],],);
   Attribute::create(         [
                'en' => ['name' => 'Material makeup or ingredients'],
                'ar' => ['name' => 'مواد التركيب أو المكونات'],],);
   Attribute::create(         [
                'en' => ['name' => 'Price'],
                'ar' => ['name' => 'السعر'],],);
   Attribute::create(         [
                'en' => ['name' => 'Reliability'],
                'ar' => ['name' => 'الموثوقية'],],);
   Attribute::create(         [
                'en' => ['name' => 'Safety'],
                'ar' => ['name' => 'سلامة'],],);
   Attribute::create(         [
                'en' => ['name' => 'Packaging'],
                'ar' => ['name' => 'التعبئة والتغليف'],],);
   Attribute::create(         [
                'en' => ['name' => 'Marketing claims'],
                'ar' => ['name' => 'مطالبات التسويق'],]);


    }
}
