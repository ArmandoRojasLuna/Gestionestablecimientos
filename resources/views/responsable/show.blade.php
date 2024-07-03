@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Responsable</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Responsable ID: {{ $responsable->id }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $responsable->nombre }}</p>
            <p class="card-text"><strong>Apellido:</strong> {{ $responsable->apellido }}</p>
            <p class="card-text"><strong>Correo:</strong> {{ $responsable->email }}</p>
            <p class="card-text"><strong>Telefono:</strong> {{ $responsable->telefono }}</p>
            <a href="{{ route('responsables.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('responsables.edit', $responsable->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('responsables.destroy', $responsable->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
