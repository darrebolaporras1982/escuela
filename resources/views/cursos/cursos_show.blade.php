@extends('layouts.index')
@section('title','Cursos')
@section('body')
    <div class="container text-center">
        <h1 class="Display-1">Para cada curso...Un profesor</h1>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <th>Nombre Curso</th><th>Nivel</th><th>Horas Academicas</th><th>Profesor</th>
            </thead>
            <tbody>

                    @foreach ($cursos as $curso )
                    <tr><td>{{ $curso->nombre }}</td><td>{{ $curso->nivel }}</td><td>{{ $curso->horas_academicas }}</td><td>{{ $curso->profesor_id }}</td></tr>
                    @endforeach

            </tbody>
        </table>
    </div>


@endsection
@section('footer')
@endsection
