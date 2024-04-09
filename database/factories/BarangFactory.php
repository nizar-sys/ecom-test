<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => 'BRG-' . sprintf('%04d', rand(1, 9999)),
            'nama' => $this->faker->name,
            'harga' => $this->faker->numberBetween(1000, 100000),
            'jumlah' => $this->faker->numberBetween(1, 100),
        ];
    }
}
