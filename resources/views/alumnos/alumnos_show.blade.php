@extends('layouts.index')
@section('title', 'Alumnos')
@section('body')
<div class="container justify-start">
    <form action="{{ route('alumno.createform') }}" method="get">
        <button type="submit" class="btn btn-primary my-3">Crear Nuevo</button>
    </form>
</div>
@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
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

