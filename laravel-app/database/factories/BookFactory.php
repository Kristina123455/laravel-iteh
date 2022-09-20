<?php

namespace Database\Factories;

use App\Models\Bookshelf;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->title(),
            'description'=>$this->faker->paragraph(),
            'slug'=>$this->faker->slug(),
            'price'=>$this->faker->numberBetween(0.99, 18.99),
            'author'=>$this->faker->name(),
            'bookshelf_id'=>Bookshelf::factory(),
            'user_id'=>User::factory()
        ];
    }
}
