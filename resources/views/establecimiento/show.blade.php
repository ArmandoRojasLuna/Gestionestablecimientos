@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Establecimiento</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Establecimiento ID: {{ $establecimiento->id }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $establecimiento->nombre }}</p>
            <p class="card-text"><strong>Direccion:</strong> {{ $establecimiento->direccion }}</p>
            <p class="card-text"><strong>Tipo:</strong> {{ $establecimiento->tipo }}</p>

            @if($establecimiento->responsable)
                <p class="card-text"><strong>Responsable:</strong> {{ $establecimiento->responsable->nombre }} {{ $establecimiento->responsable->apellido }}</p>
            @endif

            <a href="{{ route('establecimientos.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('establecimientos.edit', $establecimiento->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('establecimientos.destroy', $establecimiento->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
