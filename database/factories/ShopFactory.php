<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = Str::slug($this->faker->sentence(2));
        return [
            'name' => $name,
            'slug' => $name,
            'description' => $this->faker->sentence(20),
            'is_active' => true
        ];
    }
}
