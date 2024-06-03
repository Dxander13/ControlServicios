@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Marcas</h1>
        <a href="{{ route('marcas.create') }}" class="btn btn-primary mb-3">Agregar Marca</a>

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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                    <tr>
                        <td>{{ $marca->id }}</td>
                        <td>{{ $marca->nombre }}</td>
                        <td>
                            <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                                <a href="{{ route('marcas.show', $marca->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-primary">Editar</a>
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