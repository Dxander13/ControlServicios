@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Marca</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $marca->id }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{ $marca->nombre }}
                </div>
            </div>
        </div>

        <a href="{{ route('marcas.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection