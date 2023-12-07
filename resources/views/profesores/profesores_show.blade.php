@extends('layouts.index')
@section('title','Profesores')
@section('body')
<div class="container text-center">
    <table class="table table-striped">
        <thead>
            <th class="display-6"><span class="fw-bold">Nombre</span></th><th class="display-6"><span class="fw-bold">Profesión</span></th><th class="display-6"><span class="fw-bold">Grado Academico</span></th><th class="display-6"><span class="fw-bold">Teléfono</span></th><th class="display-6"><span class="fw-bold">Curso</span></th>
        </thead>
        <tbody>
            @foreach ($profesores as $profesor)
            <tr><td>{{ $profesor->nom_ape }}</td><td>{{ $profesor->profesion }}</td><td>{{ $profesor->grado_academico }}</td><td>{{ $profesor->telefono }}</td><td>@foreach ($profesor->curso as $curso ) <li>{{ $curso->nombre }}</li>

            @endforeach{{-- {{ $profesor->curso }} --}}</td></tr>
            @endforeach
        </tbody>
    </table>
</div>





@endsection
@section('footer')
@endsection
