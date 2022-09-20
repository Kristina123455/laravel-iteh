<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookshelfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug'=>$this->faker->slug(),
            'gender'=>$this->faker->word()
        ];
    }
}
