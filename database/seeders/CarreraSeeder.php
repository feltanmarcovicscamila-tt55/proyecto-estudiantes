<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Carrera::create([
        'nombre' => 'Robótica',
        'descripcion' => 'Carrera orientada al desarrollo de robots y sistemas automatizados.',
    ]);

    \App\Models\Carrera::create([
        'nombre' => 'Programación',
        'descripcion' => 'Carrera orientada al desarrollo de software y aplicaciones.',
    ]);

    \App\Models\Carrera::create([
        'nombre' => 'Electrónica',
        'descripcion' => 'Carrera orientada al diseño y desarrollo de sistemas electrónicos.',
    ]);
}

}
