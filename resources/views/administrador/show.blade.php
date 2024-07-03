@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Administrador</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Administrador ID: {{ $administrador->id }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $administrador->nombre }}</p>
            <p class="card-text"><strong>Apellido:</strong> {{ $administrador->apellido }}</p>
            <p class="card-text"><strong>Correo:</strong> {{ $administrador->email }}</p>
            <a href="{{ route('administradores.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('administradores.edit', $administrador->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('administradores.destroy', $administrador->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
