<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemesananseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        peminjaman::factory()->count(2)->create();
    }
}
