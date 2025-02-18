<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas=Marca::orderBy("id", "asc")->get();
        return view("marca.index", compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("marca.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:20|unique:marcas,nombre'
        ]);

        Marca::create($request->all());
        return redirect()->route('marca.index')->with('success', 'Marca creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.edit', compact('marca'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:20|unique:marcas,nombre,' . $id
        ]);

        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        return redirect()->route('marca.index')->with('success', 'Marca actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()->route('marca.index')->with('success', 'Marca eliminada correctamente.');
    }
}
