<?php

namespace App\Http\Controllers;

use App\Models\Subgrupo;
use App\Models\Tipo;
use App\Models\Linea;
use App\Models\Grupo;
use Illuminate\Http\Request;

class SubgrupoController extends Controller
{
    public function index()
    {
        // Usamos eager loading para cargar las relaciones con subgrupos
        $subgrupos = Subgrupo::with(['tipo', 'linea', 'grupo'])->paginate(5);
        return view('subgrupos.index', compact('subgrupos'));
    }
    

    public function create()
    {
        // Obtener los tipos, líneas y grupos para las relaciones
        $tipos = Tipo::all();
        $lineas = Linea::all();
        $grupos = Grupo::all();

        return view('subgrupos.create', compact('tipos', 'lineas', 'grupos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'id_tipos' => 'required|exists:tipos,id',
            'id_lineas' => 'required|exists:lineas,id',
            'id_grupos' => 'required|exists:grupos,id',
        ]);

        Subgrupo::create($request->all());

        return redirect()->route('subgrupos.index')->with('success', 'Subgrupo creado con éxito.');
    }

    public function show(Subgrupo $subgrupo)
    {
        return view('subgrupos.show', compact('subgrupo'));
    }

    public function edit(Subgrupo $subgrupo)
    {
        $tipos = Tipo::all();
        $lineas = Linea::all();
        $grupos = Grupo::all();
        //$subgrupo = Subgrupo::with('tipo', 'linea', 'grupo')->find($subgrupo->id);
        return view('subgrupos.edit', compact('subgrupo', 'tipos', 'lineas', 'grupos'));
        /* return view('subgrupos.edit', compact('subgrupo')); */
    }

    public function update(Request $request, Subgrupo $subgrupo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'id_tipos' => 'required|exists:tipos,id',
            'id_lineas' => 'required|exists:lineas,id',
            'id_grupo' => 'required|exists:grupos,id',
        ]);

        $subgrupo->update($request->all());

        return redirect()->route('subgrupos.index')->with('success', 'Subgrupo actualizado con éxito.');
    }

    public function destroy(Subgrupo $subgrupo)
    {
        $subgrupo->delete();
        return redirect()->route('subgrupos.index')->with('success', 'Subgrupo eliminado con éxito.');
    }
}
