<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        menu::factory(5)->create();
    }
}
