@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Técnico</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $tecnico->id }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{ $tecnico->nombre }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    {{ $tecnico->apellido }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $tecnico->email }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    {{ $tecnico->telefono }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Especialidad:</strong>
                    {{ $tecnico->especialidad }}
                </div>
            </div>
        </div>

        <a href="{{ route('tecnicos.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection