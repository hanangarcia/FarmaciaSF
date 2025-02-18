<?php

namespace App\Http\Controllers;

use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidadMedidas=UnidadMedida::orderBy("id","asc")->get();
        return view("unidad_medida.index",compact("unidadMedidas"));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UnidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnidadMedida $unidadMedida)
    {
        //
    }
}
