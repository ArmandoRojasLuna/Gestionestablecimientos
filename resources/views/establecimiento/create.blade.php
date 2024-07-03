@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Establecimiento</h1>
    <form action="{{ route('establecimientos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        
        <div class="mb-3">
            <label for="responsable_id" class="form-label">Responsable</label>
            <select class="form-control" id="responsable_id" name="responsable_id" required>
                <option value="" disabled selected>Seleccione un responsable</option>
                @foreach($responsables as $responsable)
                    <option value="{{ $responsable->id }}">{{ $responsable->nombre }} {{ $responsable->apellido }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

