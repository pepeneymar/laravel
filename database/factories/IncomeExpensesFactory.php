<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IncomeExpenses>
 */
class IncomeExpensesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name,
            'amount' => $this->faker->randomFloat(2,0,100000),
            'datetime' => now(),
            'type' => $this->faker->randomElement(['income','expenses'])
        ];
    }
}
