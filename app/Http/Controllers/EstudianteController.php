<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\materia;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class EstudianteController extends Controller
{
    public function create(Request $request)
    {
        $faker = Faker::create();


        $estudiante = new estudiante();
        $estudiante->nombre = $faker->name;
        $estudiante->edad = $faker->numberBetween(18, 30);
        $estudiante->email = $faker->email;

        $estudiante->save();

        //genera 5 números aleatorios no repetidos de la lista
        $materiasIdArray = $faker->randomElements(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15), 5, false);


        $materias = materia::find($materiasIdArray);
        $estudiante->materias()->attach($materias);


        return view('estudiantes.show', ['estudiante' => $estudiante]);
    }
}
