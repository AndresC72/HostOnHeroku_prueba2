<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\tipoHackersSeeder;
use Database\Seeders\grupoSeeder;
use Database\Seeders\hackerSeeder;
use Database\Seeders\crearApiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipohackersSeeder::class);
        $this->call(grupoSeeder::class);
        $this->call(hackerSeeder::class);
        $this->call(crearApiSeeder::class);
    }
}
