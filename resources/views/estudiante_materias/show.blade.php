<?php
/**
 * Created by PhpStorm.
 * User: byron
 * Date: 16/07/19
 * Time: 22:27
 */

// show.blade.php
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white"><h2>Datos del Estudiante</h2></div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">Nombre:</div>
                <div class="col-sm-6">{{ $estudiante->nombre }}</div>
            </div>

            <div class="row">
                <div class="col-sm-4">Edad:</div>
                <div class="col-sm-6">{{ $estudiante->edad }}</div>
            </div>
        </div>

    </div>
</div>

<br><br>
<div class="container">
    <h2>Materias</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Creditos</th>
            </tr>
        </thead>

        <tbody>
        <?php $totalCreditos = 0; ?>

        @foreach($estudiante->materias as $materia)
            <tr>
                <td>{{ $materia->nombre }}</td>
                <td>{{ $materia->credito }}</td>
            </tr>

            <?php $totalCreditos += $materia->credito; ?>
        @endforeach
        </tbody>

        <tfoot>
        <tr>
            <th>Total sumatoria de créditos: </th>
            <th>{{ $totalCreditos }}</th>
        </tr>
        </tfoot>
    </table>
</div>




