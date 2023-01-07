<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\estudiantes;
use App\Models\profesores;
use App\Models\asignaturas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        estudiantes::factory(10)->create();
        profesores::factory(10)->create();
        asignaturas::factory(10)->create();
    }
}
