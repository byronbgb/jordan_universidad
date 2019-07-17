<?php

namespace App\Http\Controllers;

use App\estudiante;
use Illuminate\Http\Request;

class EstudianteMateriasController extends Controller
{
    public function show(estudiante $estudiante)
    {
        return view('estudiante_materias.show', compact('estudiante'));
    }
}
