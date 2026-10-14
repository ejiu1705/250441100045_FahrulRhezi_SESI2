<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pesanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pesanan::factory(5)->create();
    }
}
