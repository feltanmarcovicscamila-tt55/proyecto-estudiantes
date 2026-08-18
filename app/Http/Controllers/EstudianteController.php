<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->get();

        return view('estudiantes.index', compact('estudiantes'));
    }
}