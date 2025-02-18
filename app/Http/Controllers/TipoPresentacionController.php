<?php

namespace App\Http\Controllers;

use App\Models\TipoPresentacion;
use Illuminate\Http\Request;

class TipoPresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoPresentaciones=TipoPresentacion::orderBy("id","asc")->get();
        return view("tipo_presentacion.index", compact("tipoPresentaciones"));
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
    public function show(TipoPresentacion $tipoPresentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoPresentacion $tipoPresentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoPresentacion $tipoPresentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoPresentacion $tipoPresentacion)
    {
        //
    }
}
