@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Servicio</h1>

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

        <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $servicio->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_id">Equipo:</label>
                <select class="form-control" id="equipo_id" name="equipo_id">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}" {{ $servicio->equipo_id == $equipo->id ? 'selected' : '' }}>{{ $equipo->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tecnico_id">Técnico:</label>
                <select class="form-control" id="tecnico_id" name="tecnico_id">
                    @foreach ($tecnicos as $tecnico)
                        <option value="{{ $tecnico->id }}" {{ $servicio->tecnico_id == $tecnico->id ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_recepcion">Fecha Recepción:</label>
                <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" value="{{ $servicio->fecha_recepcion }}">
            </div>
            <div class="form-group">
                <label for="problema_reportado">Problema Reportado:</label>
                <input type="text" class="form-control" id="problema_reportado" name="problema_reportado" value="{{ $servicio->problema_reportado }}">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="recibido" {{ $servicio->estado == 'recibido' ? 'selected' : '' }}>Recibido</option>
                    <option value="reparando" {{ $servicio->estado == 'reparando' ? 'selected' : '' }}>Reparando</option>
                    <option value="finalizado" {{ $servicio->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                    <option value="entregado" {{ $servicio->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" value="{{ $servicio->diagnostico }}">
            </div>
            <div class="form-group">
                <label for="solucion">Solución:</label>
                <input type="text" class="form-control" id="solucion" name="solucion" value="{{ $servicio->solucion }}">
            </div>
            <div class="form-group">
                <label for="fecha_entrega">Fecha Entrega:</label>
                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="{{ $servicio->fecha_entrega }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection