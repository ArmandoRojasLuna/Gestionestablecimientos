@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Comunicado</h1>
    <form action="{{ route('comunicaciones.update', $comunicacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $comunicacion->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <input type="mensaje" class="form-control" id="mensaje" name="mensaje" value="{{ $comunicacion->mensaje }}" required>
        </div>
        <div class="mb-3">
            <label for="fechaEnvio" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fechaEnvio" name="fechaEnvio" value="{{ $comunicacion->fechaEnvio }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
