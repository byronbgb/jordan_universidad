<?php

namespace App\Http\Controllers;

use App\materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function create(Request $request)
    {
        $materia = new materia();
        $materia->nombre = 'Contabilidad';
        $materia->credito = 20;

        $materia->save();

        $materia = new materia();
        $materia->nombre = 'Sistemas Operativos';
        $materia->credito = 25;

        $materia->save();

        $materia = new materia();
        $materia->nombre = 'Base de Datos I';
        $materia->credito = 25;

        $materia->save();



        return 'Success';
    }
}
