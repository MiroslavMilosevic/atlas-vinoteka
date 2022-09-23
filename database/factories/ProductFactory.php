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

        $additional = [
            'vino' => [
            
                'boja' => $this->faker->randomElement(['roze', 'crveno', 'belo']),
                'zemlja' => $this->faker->randomElement(['Srbija', 'Francuska', 'Spanija']),
                'zapremina' => strval(rand(200, 2000)) . 'ml',
                'alkohol' => strval(rand(5, 15)) . 'c',
                'regija' => $this->faker->randomElement(['Sumadija', 'Provansa', 'Bretanja']),
                'proizvodjac' => $this->faker->randomElement(['Kovacevic', 'Deuric', 'Zvnoko Bogdan']),
                'godina' => strval(rand(1970, 2020)),
                'odlezavanje' => $this->faker->randomElement(['Hrast', 'Prohrom', 'Bukva']),
                'pakovanje' => $this->faker->randomElement(['8', '12', '24']),
            ],
            'spirit' => [
            
                'tip' => $this->faker->randomElement(['Gin', 'Vodka', 'Whiskey']),
                'zapremina' => strval(rand(200, 2000)) . 'ml',
                'alkohol' => strval(rand(5, 15)) . 'c',
                'regija' => $this->faker->randomElement(['Sumadija', 'Provansa', 'Bretanja']),
                'pakovanje' => $this->faker->randomElement(['8', '12', '24']),
            ]
        ];

        $kategorija = $this->faker->randomElement(['vino', 'spirit']);

        return [
            'title' =>
            $this->faker->randomElement(['Opojni', 'Pokojni', 'Beli', 'Crni', 'Nikakvi', 'Okiceni', 'Raspali'])
                . " " .
                $this->faker->randomElement(['Rundek', 'Kundak', 'Zabac', 'Vranic', 'Lokum', 'Kokan', 'Bokan', 'Darko', 'Varvarin'])
                . " " .
                strval(rand(1, 255)),
            'text' => $this->faker->paragraph(rand(5, 15)),
            'price' => rand(2000, 10000),
            'price_discount' => rand(100, 1000),
            'is_on_discount' => $this->faker->boolean(),
            'img_url' => $this->faker->imageUrl(640, 480, 'animals', true),
            'kategorija' => $kategorija,
            'additional_fields' =>  $additional[$kategorija]

        ];
    }
}
