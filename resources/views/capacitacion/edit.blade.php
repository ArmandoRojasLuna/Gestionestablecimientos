@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Capacitacion</h1>
    <form action="{{ route('capacitaciones.update', $capacitacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $capacitacion->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $capacitacion->fecha }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="descripcion" class="form-control" id="descripcion" name="descripcion" value="{{ $capacitacion->descripcion }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
