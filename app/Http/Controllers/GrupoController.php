<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Linea;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::with('linea')->paginate(5);
        return view('grupos.index', compact('grupos'));
    }

    public function create()
    {
        $lineas = Linea::all();
        return view('grupos.create', compact('lineas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observacion' => 'nullable|string',
            'id_linea' => 'required|exists:lineas,id',
        ]);

        Grupo::create([
            'nombre' => $request->nombre,
            'observacion' => $request->observacion,
            'id_linea' => $request->id_linea,
        ]);

        return redirect()->route('grupos.index')->with('success', 'Grupo creado con éxito');
    }

    public function edit(Grupo $grupo)
    {
        $lineas = Linea::all();
        return view('grupos.edit', compact('grupo', 'lineas'));
    }
    public function show(Grupo $grupo)
    {
        return view('grupos.show', compact('grupo'));
    }
    
    public function update(Request $request, Grupo $grupo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observacion' => 'nullable|string',
            'id_linea' => 'required|exists:lineas,id',
        ]);

        $grupo->update([
            'nombre' => $request->nombre,
            'observacion' => $request->observacion,
            'id_linea' => $request->id_linea,
        ]);

        return redirect()->route('grupos.index')->with('success', 'Grupo actualizado con éxito');
    }

    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupos.index')->with('success', 'Grupo eliminado con éxito');
    }
}
