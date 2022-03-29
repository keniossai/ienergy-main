<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Tag::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => Str::slug($this->faker->word()),
        ];
    }
    
}
