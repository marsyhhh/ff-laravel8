<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tittle' => $this->faker->sentence(),
            'user_id' => mt_rand(1,5),
            'slug' => strtolower(str_replace(' ','',$this->faker->sentence())),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5),
        ];
    }
}
