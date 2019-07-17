<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\materia;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function create(Request $request)
    {
        $estudiante = new estudiante();
        $estudiante->nombre = 'Alberto Suárez';
        $estudiante->edad = 20;

        $estudiante->save();

        $materias = materia::find([1, 2, 3]);
        $estudiante->materias()->attach($materias);

        $estudiante = new estudiante();
        $estudiante->nombre = 'Lucio Gutierrez';
        $estudiante->edad = 25;

        $estudiante->save();

        $materias = materia::find([1, 3]);
        $estudiante->materias()->attach($materias);

        return 'Success';
    }
}
