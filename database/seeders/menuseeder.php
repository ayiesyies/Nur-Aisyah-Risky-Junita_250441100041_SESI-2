<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         menu::factory()->count(5)->create();
    }
}
