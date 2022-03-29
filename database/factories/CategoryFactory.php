<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => Str::slug($this->faker->word()),
        ];
    }
}
