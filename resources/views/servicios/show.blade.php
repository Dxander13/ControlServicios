@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Servicio</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $servicio->id }}
                </div>
                <div class="form-group">
                    <strong>Cliente:</strong>
                    {{ $servicio->cliente->nombre }}
                </div>
                <div class="form-group">
                    <strong>Equipo:</strong>
                    {{ $servicio->equipo->modelo }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Técnico:</strong>
                    {{ $servicio->tecnico->nombre }}
                </div>
                <div class="form-group">
                    <strong>Fecha Recepción:</strong>
                    {{ $servicio->fecha_recepcion }}
                </div>
                <div class="form-group">
                    <strong>Problema Reportado:</strong>
                    {{ $servicio->problema_reportado }}
                </div>
                <div class="form-group">
                    <strong>Estado:</strong>
                    {{ $servicio->estado }}
                </div>
                <div class="form-group">
                    <strong>Diagnóstico:</strong>
                    {{ $servicio->diagnostico }}
                </div>
                <div class="form-group">
                    <strong>Solución:</strong>
                    {{ $servicio->solucion }}
                </div>
                <div class="form-group">
                    <strong>Fecha Entrega:</strong>
                    {{ $servicio->fecha_entrega }}
                </div>
            </div>
        </div>

        <a href="{{ route('servicios.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection