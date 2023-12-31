@extends('layouts.index')
@section('title', 'Alumnos')
@section('body')
<div class="container justify-start">
        <a href="{{ route('alumno.createform') }}" class="btn btn-primary my-3">Crear Nuevo</a>
</div>
@if(session('creado')){{-- Cuando se haya CREADO el Alumno correctamente, redirigirá a esta pagina y mostrará el mensaje --}}
    <div class="alert alert-success text-center">
        {{ session('creado') }}
    </div>
@endif
@if(session('eliminado')){{-- Cuando se haya ELIMINADO el Alumno correctamente, redirigirá a esta pagina y mostrará el mensaje --}}
    <div class="alert alert-success text-center">
        {{ session('eliminado') }}
    </div>
@endif
@if(session('modificado')){{-- Cuando se haya ELIMINADO el Alumno correctamente, redirigirá a esta pagina y mostrará el mensaje --}}
    <div class="alert alert-success text-center">
        {{ session('modificado') }}
    </div>
@endif

<div class="container text-center">
    <h1 class="h1">Nombres de los Alumnos</h1>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr><td><a href="{{ route('alumno.details',['id'=>$alumno->id]) }}">{{ $alumno->nom_ape }}</a></td></tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('footer')
@endsection

