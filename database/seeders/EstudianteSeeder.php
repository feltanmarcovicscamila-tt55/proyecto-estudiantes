<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Estudiante::create([
        'nombre' => 'Camila',
        'apellido' => 'Feltan',
        'email' => 'camila@example.com',
        'carrera_id' => 1,
    ]);

    \App\Models\Estudiante::create([
        'nombre' => 'Juan',
        'apellido' => 'Pérez',
        'email' => 'juan@example.com',
        'carrera_id' => 2,
    ]);

    \App\Models\Estudiante::create([
        'nombre' => 'Martina',
        'apellido' => 'Gómez',
        'email' => 'martina@example.com',
        'carrera_id' => 3,
    ]);
}
}
