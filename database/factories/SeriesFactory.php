<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug'=>$this->faker->slug(),
            'title'=>$this->faker->title(),
            'description'=>$this->faker->paragraph(),
            'user_id'=>User::factory(),
            'genre_id'=>Genre::factory(),
            'starring_id'=>Starring::factory()
         ];
    }
}
