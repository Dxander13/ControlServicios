<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnicos = Tecnico::all();
        return view('tecnicos.index', compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:tecnicos,email',
            'telefono' => 'nullable|string',
            'especialidad' => 'nullable|string',
        ]);

        Tecnico::create($request->all());

        return redirect()->route('tecnicos.index')
                         ->with('success', 'Técnico creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        return view('tecnicos.show', compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        return view('tecnicos.edit', compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:tecnicos,email,' . $id,
            'telefono' => 'nullable|string',
            'especialidad' => 'nullable|string',
        ]);

        $tecnico = Tecnico::findOrFail($id);
        $tecnico->update($request->all());

        return redirect()->route('tecnicos.index')
                         ->with('success', 'Técnico actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->delete();

        return redirect()->route('tecnicos.index')
                         ->with('success', 'Técnico eliminado exitosamente.');
    }
}
