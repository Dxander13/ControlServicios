@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Técnicos</h1>
        <a href="{{ route('tecnicos.create') }}" class="btn btn-primary mb-3">Agregar Técnico</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnicos as $tecnico)
                    <tr>
                        <td>{{ $tecnico->id }}</td>
                        <td>{{ $tecnico->nombre }}</td>
                        <td>{{ $tecnico->apellido }}</td>
                        <td>{{ $tecnico->email }}</td>
                        <td>{{ $tecnico->telefono }}</td>
                        <td>{{ $tecnico->especialidad }}</td>
                        <td>
                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST">
                                <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-primary">Editar</a>
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