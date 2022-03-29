<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Post::class;

    public function definition()
    {
        $id = rand(0, 5000);
        $image = "https://picsum.photos/id/".$id."/4400/2656.jpg";
        return [
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'image' => $image,
            'description' => $this->faker->text(400),
            'category_id' => function(){
                return Category::inRandomOrder()->first()->id;
            },
            'user_id' => 1,
        ];
    }
}
