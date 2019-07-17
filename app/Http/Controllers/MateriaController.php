<?php

namespace App\Http\Controllers;

use App\materia;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class MateriaController extends Controller
{
    public function create(Request $request)
    {

        $creadas = array();
        $existentes = array();

        if ( !$materia = materia::where('nombre', 'Contabilidad' )->first()) {
            $materia = new materia();
            $materia->id = 1;
            $materia->nombre = 'Contabilidad';
            $materia->credito = 20;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Informática básica' )->first()) {
            $materia = new materia();
            $materia->id = 2;
            $materia->nombre = 'Informática básica';
            $materia->credito = 15;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Redes I' )->first()) {
            $materia = new materia();
            $materia->id = 3;
            $materia->nombre = 'Redes I';
            $materia->credito = 20;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Redes 2' )->first()) {
            $materia = new materia();
            $materia->id = 4;
            $materia->nombre = 'Redes 2';
            $materia->credito = 20;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Programación Orientada a Objetos I' )->first()) {
            $materia = new materia();
            $materia->id = 5;
            $materia->nombre = 'Programación Orientada a Objetos I';
            $materia->credito = 30;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Programación Orientada a Objetos II' )->first()) {
            $materia = new materia();
            $materia->id = 6;
            $materia->nombre = 'Programación Orientada a Objetos II';
            $materia->credito = 30;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Estadística' )->first()) {
            $materia = new materia();
            $materia->id = 7;
            $materia->nombre = 'Estadística';
            $materia->credito = 23;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Sistemas Operativos I' )->first()) {
            $materia = new materia();
            $materia->id = 8;
            $materia->nombre = 'Sistemas Operativos I';
            $materia->credito = 25;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Sistemas Operativos II' )->first()) {
            $materia = new materia();
            $materia->id = 9;
            $materia->nombre = 'Sistemas Operativos II';
            $materia->credito = 28;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Inteligencia Artificial' )->first()) {
            $materia = new materia();
            $materia->id = 10;
            $materia->nombre = 'Inteligencia Artificial';
            $materia->credito = 20;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Cálculo Diferencial' )->first()) {
            $materia = new materia();
            $materia->id = 11;
            $materia->nombre = 'Cálculo Diferencial';
            $materia->credito = 22;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Cálculo Integral' )->first()) {
            $materia = new materia();
            $materia->id = 12;
            $materia->nombre = 'Cálculo Integral';
            $materia->credito = 24;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Ecuaciones Diferenciales' )->first()) {
            $materia = new materia();
            $materia->id = 13;
            $materia->nombre = 'Ecuaciones Diferenciales';
            $materia->credito = 20;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Algebre Lineal' )->first()) {
            $materia = new materia();
            $materia->id = 14;
            $materia->nombre = 'Algebre Lineal';
            $materia->credito = 18;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        if ( !$materia = materia::where('nombre', 'Ingeniería de Software' )->first()) {
            $materia = new materia();
            $materia->id = 15;
            $materia->nombre = 'Ingeniería de Software';
            $materia->credito = 24;

            $materia->save();

            $creadas[] = $materia;
        }else {
            $existentes[] = $materia;
        }

        $materias = new \stdClass();
        $materias->creadas = $creadas;
        $materias->existentes = $existentes;


        return view('materias.show', ['materias' => $materias]);


    }
}
