@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Técnico</h1>

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

        <form action="{{ route('tecnicos.update', $tecnico->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{ $tecnico->nombre }}">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" value="{{ $tecnico->apellido }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $tecnico->email }}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="{{ $tecnico->telefono }}">
            </div>
            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" class="form-control" id="especialidad" placeholder="Especialidad" name="especialidad" value="{{ $tecnico->especialidad }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection