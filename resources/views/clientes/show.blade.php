@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Cliente</h1>
        
        <div class="card">
            <div class="card-header">
                Cliente #{{ $cliente->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $cliente->nombre }} {{ $cliente->apellido }}</h5>
                <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection