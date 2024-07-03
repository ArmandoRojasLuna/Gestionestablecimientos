@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Comunicado</h1>
    <form action="{{ route('comunicaciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <input type="text" class="form-control" id="mensaje" name="mensaje" required>
        </div>
        <div class="mb-3">
            <label for="fechaEnvio" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fechaEnvio" name="fechaEnvio" required>
        </div>

        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

