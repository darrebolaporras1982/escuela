@extends('layouts.index')
@section('title', 'Confirmar Borrado')
@section('body')
<div class="container text-center">
    <div class="display-5">Seguro Que quieres borrar el alumno <span class="fw-bold">{{ $alumno->nom_ape }}</span>??</div>
    <a class="btn btn-danger" href="{{ route('alumno.delete',['id' => $alumno->id]) }}">Confirmar</a>
    {{-- en los botones de confirmacion, paso junto con la ruta, el parametro del alumno, bien para borrar o para volver a enseñar los datos --}}
    <a class="btn btn-info" href="{{ route('alumno.details',['id' => $alumno->id]) }}">Cancelar</a>
    {{-- en los botones de confirmacion, paso junto con la ruta, el parametro del alumno, bien para borrar o para volver a enseñar los datos --}}
</div>

@endsection
@section('footer')
