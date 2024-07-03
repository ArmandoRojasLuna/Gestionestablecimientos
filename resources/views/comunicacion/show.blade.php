@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Comunicado</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Comunicado ID: {{ $comunicacion->id }}</h5>
            <p class="card-text"><strong>Titulo:</strong> {{ $comunicacion->titulo }}</p>
            <p class="card-text"><strong>Mensaje:</strong> {{ $comunicacion->mensaje }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($comunicacion->fechaEnvio)->format('d/m/Y') }}</p>
            <a href="{{ route('comunicaciones.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('comunicaciones.edit', $comunicacion->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('comunicaciones.destroy', $comunicacion->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
