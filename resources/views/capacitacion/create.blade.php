@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Capacitacion</h1>
    <form action="{{ route('capacitaciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

