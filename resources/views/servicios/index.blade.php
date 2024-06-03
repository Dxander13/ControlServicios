@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Servicios</h1>
        <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3">Agregar Servicio</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Equipo</th>
                    <th>Técnico</th>
                    <th>Fecha Recepción</th>
                    <th>Problema Reportado</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->id }}</td>
                        <td>{{ $servicio->cliente->nombre }}</td>
                        <td>{{ $servicio->equipo->modelo }}</td>
                        <td>{{ $servicio->tecnico->nombre }}</td>
                        <td>{{ $servicio->fecha_recepcion }}</td>
                        <td>{{ $servicio->problema_reportado }}</td>
                        <td>{{ $servicio->estado }}</td>
                        <td>
                            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
                                <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
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