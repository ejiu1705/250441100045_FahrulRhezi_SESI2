<?php

namespace Database\Factories;

use App\Models\menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'menu _id' => menu::inRandomOrder()->value('id'),
            'menu' => fake()->randomElement([
                'Nasi Goreng Spesial',
                'Soto Ayam',
                'Ayam Bakar',
                'Es Teh',
                'Jus Alpukat',
            ]),
            'harga' => fake()->randomElement([
                25000,
                20000,
                28000,
                5000,
                15000,
            ]),
        ];
    }
}
