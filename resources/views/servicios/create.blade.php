@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Servicio</h1>

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

        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_id">Equipo:</label>
                <select class="form-control" id="equipo_id" name="equipo_id">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tecnico_id">Técnico:</label>
                <select class="form-control" id="tecnico_id" name="tecnico_id">
                    @foreach ($tecnicos as $tecnico)
                        <option value="{{ $tecnico->id }}">{{ $tecnico->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_recepcion">Fecha Recepción:</label>
                <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" value="{{ old('fecha_recepcion') }}">
            </div>
            <div class="form-group">
                <label for="problema_reportado">Problema Reportado:</label>
                <input type="text" class="form-control" id="problema_reportado" name="problema_reportado" value="{{ old('problema_reportado') }}">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="recibido">Recibido</option>
                    <option value="reparando">Reparando</option>
                    <option value="finalizado">Finalizado</option>
                    <option value="entregado">Entregado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" value="{{ old('diagnostico') }}">
            </div>
            <div class="form-group">
                <label for="solucion">Solución:</label>
                <input type="text" class="form-control" id="solucion" name="solucion" value="{{ old('solucion') }}">
            </div>
            <div class="form-group">
                <label for="fecha_entrega">Fecha Entrega:</label>
                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="{{ old('fecha_entrega') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection