@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Equipos</h1>
        <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">Agregar Equipo</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Tipo</th>
                    <th>Número de Serie</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>{{ $equipo->marca->nombre }}</td>
                        <td>{{ $equipo->modelo }}</td>
                        <td>{{ $equipo->tipo }}</td>
                        <td>{{ $equipo->numero_serie }}</td>
                        <td>
                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
                                <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-primary">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection