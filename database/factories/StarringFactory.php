<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Starring>
 */
class StarringFactory extends Factory
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
           'name'=>$this->faker->word(),
           'details'=>$this->faker->paragraph(),
        ];
    }
}
