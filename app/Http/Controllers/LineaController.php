<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use App\Models\Tipo;
use Illuminate\Http\Request;

class LineaController extends Controller
{
    // Mostrar todas las líneas
    public function index()
    {
        $lineas = Linea::paginate(5); // Cambia 10 por el número de registros por página que deseas mostrar
        return view('lineas.index', compact('lineas'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        $tipos = Tipo::all();
        return view('lineas.create', compact('tipos'));
    }

    // Guardar una nueva línea
    public function store(Request $request)
    {
        $request->validate([
            'linea' => 'required|string|max:255',
            'observacion' => 'nullable|string',
            'tipo_id' => 'required|exists:tipos,id',
        ]);

        Linea::create($request->all());

        return redirect()->route('lineas.index')->with('success', 'Línea creada correctamente');
    }

    // Mostrar detalles de una línea
    public function show(Linea $linea)
    {
        return view('lineas.show', compact('linea'));
    }

    // Mostrar formulario de edición
    public function edit(Linea $linea)
    {
        $tipos = Tipo::all();
        return view('lineas.edit', compact('linea', 'tipos'));
    }

    // Actualizar línea
    public function update(Request $request, Linea $linea)
    {
        $request->validate([
            'linea' => 'required|string|max:255',
            'observacion' => 'nullable|string',
            'tipo_id' => 'required|exists:tipos,id',
        ]);

        $linea->update($request->all());

        return redirect()->route('lineas.index')->with('success', 'Línea actualizada correctamente');
    }

    // Eliminar línea
    public function destroy(Linea $linea)
    {
        $linea->delete();
        return redirect()->route('lineas.index')->with('success', 'Línea eliminada correctamente');
    }
}
