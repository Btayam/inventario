<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    // Mostrar todos los tipos
    public function index()
    {
        $tipos = Tipo::paginate(3); // Cambia 10 por el número de registros por página que deseas mostrar
        return view('tipos.index', compact('tipos'));
    }

    // Mostrar el formulario para crear un nuevo tipo
    public function create()
    {
        return view('tipos.create');
    }

    // Almacenar un nuevo tipo en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observacion' => 'nullable|string',
        ]);

        // Crear el tipo
        Tipo::create($request->all());

        // Redirigir a la lista de tipos
        return redirect()->route('tipos.index')->with('success', 'Tipo creado exitosamente');
    }

    // Mostrar un tipo específico
    public function show(Tipo $tipo)
    {
        return view('tipos.show', compact('tipo'));
    }

    // Mostrar el formulario para editar un tipo existente
    public function edit(Tipo $tipo)
    {
        return view('tipos.edit', compact('tipo'));
    }

    // Actualizar un tipo existente
    public function update(Request $request, Tipo $tipo)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observacion' => 'nullable|string',
        ]);

        // Actualizar el tipo
        $tipo->update($request->all());

        // Redirigir a la lista de tipos
        return redirect()->route('tipos.index')->with('success', 'Tipo actualizado exitosamente');
    }

    // Eliminar un tipo
    public function destroy(Tipo $tipo)
    {
        // Eliminar el tipo
        $tipo->delete();

        // Redirigir a la lista de tipos
        return redirect()->route('tipos.index')->with('success', 'Tipo eliminado exitosamente');
    }
}
