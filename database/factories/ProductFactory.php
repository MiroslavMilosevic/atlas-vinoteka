<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(2, 4)),
            'text' => $this->faker->paragraph(rand(5, 15)),
            'price' => rand(2000, 10000),
            'price_discount' => rand(100, 1000),
            'is_on_discount' => $this->faker->boolean(),
            'img_url' => $this->faker->imageUrl(640, 480, 'animals', true),
            'additional_fields' => $this->faker->randomElement(

                [
                    [
                        'kategorija' => 'vino',
                        'boja' => $this->faker->randomElement(['roze', 'crveno', 'belo']),
                        'zemlja' => $this->faker->randomElement(['Srbija', 'Francuska', 'Spanija']),
                        'zapremina' => strval(rand(200, 2000)) . 'ml',
                        'alkohol' => strval(rand(5, 15)) . 'c',
                        'regija' => $this->faker->randomElement(['Sumadija', 'Provansa', 'Bretanja']),
                        'proizvodjac' => $this->faker->randomElement(['Kovacevic', 'Deuric', 'Zvnoko Bogdan']),
                        'godina' => strval(rand(1970, 2020)),
                        'odlezavanje' => $this->faker->randomElement(['Hrast', 'Prohrom', 'Bukva']),
                        'pakovanje' => $this->faker->randomElement(['8', '12', '24']),
                    ]
                    ,
                    [
                        'kategorija' => 'spirit',
                        'tip' => $this->faker->randomElement(['Gin', 'Vodka', 'Whiskey']),
                        'zapremina' => strval(rand(200, 2000)) . 'ml',
                        'alkohol' => strval(rand(5, 15)) . 'c',
                        'regija' => $this->faker->randomElement(['Sumadija', 'Provansa', 'Bretanja']),
                        'pakovanje' => $this->faker->randomElement(['8', '12', '24']),
                    ]
                ]
            )

        ];
    }
}
