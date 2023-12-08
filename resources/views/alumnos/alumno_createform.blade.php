@extends('layouts.index')
@section('title', 'Crear Alumno')
@section('body')
<div class="container">
    <form action="{{ route('alumnos.create') }}" method="post">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" name="nombreApellidos" value="{{ old('nombreApellidos') }}">
            @error('nombreApellidos')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="{{ old('edad') }}">
            @error('edad')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <label for="Direccion" class="form-label" >Dirección</label>
            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
            @error('direccion')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <label for="Telefono" class="form-label" >Teléfono</label>
            <input type="tel" class="form-control" name="telefono" value="{{ old('telefono') }}">
            @error('telefono')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary text-center items-center">Submit</button>
        @csrf
    </form>
</div>
@endsection
@section('footer')
@endsection
