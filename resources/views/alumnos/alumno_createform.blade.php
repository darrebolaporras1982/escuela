@extends('layouts.index')
@section('title', 'Crear Alumno')
@section('body')
<div class="container">
    <form action="{{ route('alumnos.create') }}" method="get">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" name="nombreApellidos">
        </div>
        <div class="mb-3">
            <label for="Edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad">
        </div>
        <div class="mb-3 form-check">
            <label for="Direccion" class="form-label" >Dirección</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="mb-3 form-check">
            <label for="Telefono" class="form-label" >Teléfono</label>
            <input type="tel" class="form-control" name="telefono">
        </div>
        <button type="submit" class="btn btn-primary text-center items-center">Submit</button>
        @csrf
    </form>
</div>
@endsection
@section('footer')
@endsection
