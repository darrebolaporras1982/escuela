@extends('layouts.index');
@section('title', 'Datos Alumno')
@section('body')
<div class="container text-center justify-center ">
    <h1 class="display-2 text-center justify-center m-5">Datos Individuales del Alumno <span class="fw-bold" >{{ $alumno->nom_ape }}</span></h1>
    <table class="table table-striped ">
        <thead>
            <th class="display-4">Edad</th><th class="display-4 text-center">Dirección</th><th class="display-4 text-center">Telefono</th>
        </thead>
        <tbody>
            <tr>
                <td class="display-6">{{ $alumno->edad }}</td><td class="display-6">{{ $alumno->direccion }}</td><td class="display-6">{{ $alumno->telefono }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container text-center">
    <a class="btn btn-primary" href="{{ route('alumno.editInform',[$alumno->id]) }}">Editar Alumno</a>
    <a class="btn btn-danger" href="{{ route('alumno.confirm_delete',[$alumno->id]) }}">Eliminar Alumno</a>
</div>
@endsection
@section('footer')
