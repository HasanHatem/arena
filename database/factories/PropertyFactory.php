<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'brief' => 'Lorem ipsum dolor sit',
            'price' => $this->faker->numberBetween(100000, 1000000),
            'status' => $this->faker->randomElement(['on-plan', 'off-plan']),
            'paid_returns' => 'Quarterly',
            'annual_yield' => '20%',
            'images' => json_encode(['uploads/images/properties/1.png', 'uploads/images/properties/2.png', 'uploads/images/properties/3.png']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
