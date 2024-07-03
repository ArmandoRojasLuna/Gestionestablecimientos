@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Responsables</h1>
    <a href="{{ route('responsables.create') }}" class="btn btn-primary">Agregar Responsable</a>
    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responsables as $responsable)
            <tr>
                <td>{{ $responsable->id }}</td>
                <td>{{ $responsable->nombre }}</td>
                <td>{{ $responsable->apellido }}</td>
                <td>{{ $responsable->email }}</td>
                <td>{{ $responsable->telefono }}</td>
                <td>
                    <a href="{{ route('responsables.show', $responsable->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('responsables.edit', $responsable->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('responsables.destroy', $responsable->id) }}" method="POST" style="display:inline-block;">
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
