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
    <h2>Materias</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Creditos</th>
            <th>Observaciones</th>
        </tr>
        </thead>

        <tbody>
        <?php $i = 1; ?>

        @foreach($materias->creadas as $materia)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $materia->nombre }}</td>
                <td>{{ $materia->credito }}</td>
                <td>Esta materia se ha acabado de crear</td>
            </tr>
            <?php $i++; ?>
        @endforeach

        @foreach($materias->existentes as $materia)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $materia->nombre }}</td>
                <td>{{ $materia->credito }}</td>
                <td>Esta materia ya se había creado antes</td>
            </tr>
            <?php $i++; ?>
        @endforeach
        </tbody>
    </table>
</div>