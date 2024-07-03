@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Administrador</h1>
    <form action="{{ route('administradores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

