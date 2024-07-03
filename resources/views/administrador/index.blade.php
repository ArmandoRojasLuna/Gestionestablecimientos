@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Administradores</h1>
    <a href="{{ route('administradores.create') }}" class="btn btn-primary">Agregar Administrador</a>
    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($administradores as $administrador)
            <tr>
                <td>{{ $administrador->id }}</td>
                <td>{{ $administrador->nombre }}</td>
                <td>{{ $administrador->apellido }}</td>
                <td>{{ $administrador->email }}</td>
                <td>
                    <a href="{{ route('administradores.show', $administrador->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('administradores.edit', $administrador->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('administradores.destroy', $administrador->id) }}" method="POST" style="display:inline-block;">
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
