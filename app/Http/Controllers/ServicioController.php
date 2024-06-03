<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Tecnico;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::with(['cliente', 'equipo', 'tecnico'])->get();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.create', compact('clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'equipo_id' => 'required|exists:equipos,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'fecha_recepcion' => 'required|date',
            'problema_reportado' => 'required|max:255',
            'estado' => 'required|in:recibido,reparando,finalizado,entregado',
            'diagnostico' => 'nullable|max:255',
            'solucion' => 'nullable|max:255',
            'fecha_entrega' => 'nullable|date',
        ]);

        Servicio::create($request->all());

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicio = Servicio::with(['cliente', 'equipo', 'tecnico'])->findOrFail($id);
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicio = Servicio::findOrFail($id);
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.edit', compact('servicio', 'clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'equipo_id' => 'required|exists:equipos,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'fecha_recepcion' => 'required|date',
            'problema_reportado' => 'required|max:255',
            'estado' => 'required|in:recibido,reparando,finalizado,entregado',
            'diagnostico' => 'nullable|max:255',
            'solucion' => 'nullable|max:255',
            'fecha_entrega' => 'nullable|date',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return redirect()->route('servicios.index')
                         ->with('success', 'Servicio eliminado exitosamente.');
    }
}
