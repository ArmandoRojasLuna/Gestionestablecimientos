@extends('layouts.app')

@section('content')
<head>
    <title>Bienvenido a Gestión de Establecimientos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2; /* Fondo gris claro */
        }
        .card {
            margin: 10px 0;
            transition: transform 0.2s;
            background-size: cover;
            background-position: center;
            height: 250px; /* Ajusta según tus necesidades */
            color: white;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido a Gestión de Establecimientos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @auth
                        @if(Auth::user()->tipo == "administrador")                        
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/administradores.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Administradores</h5>
                                        <a href="{{ route('administradores.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/responsables.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Responsables</h5>
                                        <a href="{{ route('responsables.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/establecimientos.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Establecimientos</h5>
                                        <a href="{{ route('establecimientos.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/capacitaciones.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Capacitaciones</h5>
                                        <a href="{{ route('capacitaciones.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/comunicados.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Comunicados</h5>
                                        <a href="{{ route('comunicaciones.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/capacitaciones.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Capacitaciones</h5>
                                        <a href="{{ route('capacitaciones.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background-image: url('{{ asset('images/comunicados.jpg') }}');">
                                    <div class="card-body">
                                        <h5 class="card-title">Comunicados</h5>
                                        <a href="{{ route('comunicaciones.index') }}" class="btn btn-primary">Gestionar</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
