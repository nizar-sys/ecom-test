<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => 'CST-' . sprintf('%04d', rand(1, 9999)),
            'nama' => $this->faker->name,
            'telp' => $this->faker->phoneNumber,
        ];
    }
}
