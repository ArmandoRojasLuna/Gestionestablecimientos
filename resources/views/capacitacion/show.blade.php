@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Capacitacion</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Capacitacion ID: {{ $capacitacion->id }}</h5>
            <p class="card-text"><strong>Titulo:</strong> {{ $capacitacion->titulo }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($capacitacion->fecha)->format('d/m/Y') }}</p>
            <p class="card-text"><strong>Descripcion:</strong> {{ $capacitacion->descripcion }}</p>
            <a href="{{ route('capacitaciones.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('capacitaciones.edit', $capacitacion->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('capacitaciones.destroy', $capacitacion->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
