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
             'nama_menu' => fake()->name(),
             'jenis' => fake()->name(),
             'harga' => fake()->name(),
             'tanggal_pesan' => fake()->date(),
        ];
    }
}
