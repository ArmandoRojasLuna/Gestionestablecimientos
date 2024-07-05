@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Capacitaciones</h1>


@if(Auth::check() && Auth::user()->tipo == 'administrador')
    <a href="{{ route('capacitaciones.create') }}" class="btn btn-primary">Agregar Capacitaciones</a>
    @endif


    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capacitaciones as $capacitacion)
            <tr>
                <td>{{ $capacitacion->id }}</td>
                <td>{{ $capacitacion->titulo }}</td>
                <td>{{ $capacitacion->fecha }}</td>
                <td>{{ $capacitacion->descripcion }}</td>
                <td>


                <!-- Botones de Editar y Eliminar (Visible solo para administradores) -->
                @if(Auth::user()->tipo == 'administrador')
                    <a href="{{ route('capacitaciones.edit', $capacitacion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('capacitaciones.destroy', $capacitacion->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                @endif


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
