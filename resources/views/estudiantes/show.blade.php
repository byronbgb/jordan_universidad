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
    <h2>Estudiante nuevo creado</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Edad</th>
        </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->email }}</td>
                <td>{{ $estudiante->edad }}</td>
            </tr>
        </tbody>
    </table>
</div>