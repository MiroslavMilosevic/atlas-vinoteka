<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(rand(2,4)),
            'text'=>$this->faker->paragraph(rand(5,15)),
            'img_url'=>$this->faker->imageUrl(640, 480, 'animals', true),
            'should_end_at' => $this->faker->dateTimeBetween('+1 week', '+5 week')
            
        ];
    }
}
