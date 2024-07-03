@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Establecimientos</h1>
    <a href="{{ route('establecimientos.create') }}" class="btn btn-primary">Agregar Establecimiento</a>
    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Tipo</th>
                <th>Responsable</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($establecimientos as $establecimiento)
            <tr>
                <td>{{ $establecimiento->id }}</td>
                <td>{{ $establecimiento->nombre }}</td>
                <td>{{ $establecimiento->direccion }}</td>
                <td>{{ $establecimiento->tipo }}</td>
                <td>
                    @if ($establecimiento->responsable)
                        {{ $establecimiento->responsable->nombre }} {{ $establecimiento->responsable->apellido }}
                    @else
                        Sin responsable asignado
                    @endif
                </td>
                <td>
                    <a href="{{ route('establecimientos.show', $establecimiento->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('establecimientos.edit', $establecimiento->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('establecimientos.destroy', $establecimiento->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
