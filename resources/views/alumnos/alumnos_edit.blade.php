@extends('layouts.index')
@section('title', 'Editar Alumno')
@section('body')
<div class="container">
    <div class="display-5 text-center">Modifica Los datos del Alumno <span class="pw-bold">{{ $alumno->nom_ape }}</span></div>
    <form action="{{ route('alumno.edit',[$alumno]) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" name="nombreApellidos" value="{{ old('nombreApellidos',$alumno->nom_ape) }}">
            @error('nombreApellidos')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="{{ old('edad',$alumno->edad) }}">
            @error('edad')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <label for="Direccion" class="form-label" >Dirección</label>
            <input type="text" class="form-control" name="direccion" value="{{ old('direccion',$alumno->direccion) }}">
            @error('direccion')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <label for="Telefono" class="form-label" >Teléfono</label>
            <input type="tel" class="form-control" name="telefono" value="{{ old('telefono',$alumno->telefono) }}">
            @error('telefono')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary text-center items-center">Submit</button>
    </form>
</div>
@endsection
@section('footer')
@endsection
