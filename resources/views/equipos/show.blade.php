@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Equipo</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $equipo->id }}
                </div>
                <div class="form-group">
                    <strong>Marca:</strong>
                    {{ $equipo->marca->nombre }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    {{ $equipo->modelo }}
                </div>
                <div class="form-group">
                    <strong>Tipo:</strong>
                    {{ $equipo->tipo }}
                </div>
                <div class="form-group">
                    <strong>Número de Serie:</strong>
                    {{ $equipo->numero_serie }}
                </div>
            </div>
        </div>

        <a href="{{ route('equipos.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection