@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Marca</h1>

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

        <form action="{{ route('marcas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection