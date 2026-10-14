<?php

namespace Database\Factories;

use App\Models\pemesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pemesanan>
 */
class pemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'menu_id' => menu::factory(),
             'nama_pelanggan' => fake()->name(),
             'nomor_meja' => fake()->number_format(),
             'jumlah' => fake()->number_format(),
             'total_harga' => fake()->number_format(),
             'status' => fake()->name(),
             'tanggal_pesan' => fake()->date(),
             
        ];
    }
}
