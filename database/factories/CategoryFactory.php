<?php

namespace Database\Factories;

use App\Jobs\CategoryImageResizeJob;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories_id = collect(Category::select('id')->get());

        $name = $this->faker->unique()->sentence(random_int(2, 10));
        $slug = Str::slug($name);

        $tmp_images = collect(Storage::disk('public')->files('background'));
        $temp = $tmp_images->random();
        $image = "$slug.jpg";
        Storage::disk('categories')->put($image, Storage::disk('public')->get($temp));
        dispatch(new CategoryImageResizeJob('categories', $image));

        if (count($categories_id) < 10)
            return [
                'slug' => $slug,
                'status' => $this->faker->boolean(),
                'name' => $name,
                'image' => $image,
            ];

        else
            return [
                'slug' => Str::slug($name),
                'status' => $this->faker->boolean(),
                'name' => $name,
                'image' => $image,
                'parent_id' => $categories_id->random(),
            ];
    }
}
