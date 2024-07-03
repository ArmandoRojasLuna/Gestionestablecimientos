@extends('layouts.app')

@section('content')
<head>
    <title>Bienvenido a Gestion de Establecimientos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido a Gestion de Establecimientos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="list-group">

                    <a href="{{ route('administradores.index') }}" class="list-group-item list-group-item-action">Administradores</a>
                    <a href="{{ route('responsables.index') }}" class="list-group-item list-group-item-action">Responsables</a>
                    <a href="{{ route('establecimientos.index') }}" class="list-group-item list-group-item-action">Establecimientos</a>
                    <a href="{{ route('capacitaciones.index') }}" class="list-group-item list-group-item-action">Capacitaciones</a>
                    <a href="{{ route('comunicaciones.index') }}" class="list-group-item list-group-item-action">Comunicados</a>
                    

                </div>
            </div>
        </div>
    </div>
</body>

@endsection
