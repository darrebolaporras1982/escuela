@extends('layouts.index');
@section('title', 'Datos Alumno')
@section('body')
<div class="container text-center justify-center ">
    <h1 class="display-2 text-center justify-center m-5">Datos Individuales del Alumno {{ $alumno->nom_ape }}</h1>
    <table class="table table-striped">
        <thead>
            <th>Edad</th><th>Dirección</th><th>Telefono</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $alumno->edad }}</td><td>{{ $alumno->direccion }}</td><td>{{ $alumno->telefono }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@section('footer')
