@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Comunicados</h1>
    <a href="{{ route('comunicaciones.create') }}" class="btn btn-primary">Agregar Comunicado</a>
    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comunicaciones as $comunicacion)
            <tr>
                <td>{{ $comunicacion->id }}</td>
                <td>{{ $comunicacion->titulo }}</td>
                <td>{{ $comunicacion->mensaje }}</td>
                <td>{{ $comunicacion->fechaEnvio }}</td>
                <td>
                    <a href="{{ route('comunicaciones.show', $comunicacion->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('comunicaciones.edit', $comunicacion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('comunicaciones.destroy', $comunicacion->id) }}" method="POST" style="display:inline-block;">
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
