@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Equipo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Hubo problemas con los datos ingresados.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('equipos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="marca_id">Marca:</label>
                <select class="form-control" id="marca_id" name="marca_id">
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="modelo" value="{{ old('modelo') }}">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo" value="{{ old('tipo') }}">
            </div>
            <div class="form-group">
                <label for="numero_serie">Número de Serie:</label>
                <input type="text" class="form-control" id="numero_serie" placeholder="Número de Serie" name="numero_serie" value="{{ old('numero_serie') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection