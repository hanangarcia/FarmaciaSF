<?php

namespace App\Http\Controllers;

use App\Models\TipoMovimiento;
use Illuminate\Http\Request;

class TipoMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoMovimientos=TipoMovimiento::orderBy("id", "asc")->get();
        return view("tipomovimiento.index", compact('tipoMovimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipomovimiento.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:20|unique:tipo_movimientos,nombre'
        ]);

        TipoMovimiento::create($request->all());
        return redirect()->route('tipomovimiento.index')->with('success', 'Tipo de movimiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipo = TipoMovimiento::findOrFail($id);
        return view('tipomovimiento.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo = TipoMovimiento::findOrFail($id);
        return view('tipomovimiento.edit', compact('tipo'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:20|unique:tipo_movimientos,nombre,' . $id
        ]);

        $tipo = TipoMovimiento::findOrFail($id);
        $tipo->update($request->all());

        return redirect()->route('tipomovimiento.index')->with('success', 'Tipo de movimiento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipo = TipoMovimiento::findOrFail($id);
        $tipo->delete();

        return redirect()->route('tipomovimiento.index')->with('success', 'Tipo de movimiento eliminado correctamente.');
    }
}
