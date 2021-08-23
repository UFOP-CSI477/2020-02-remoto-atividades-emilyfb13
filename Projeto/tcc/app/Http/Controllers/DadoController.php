<?php

namespace App\Http\Controllers;

use App\Models\Dado;
use Illuminate\Http\Request;

class DadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Dado::orderBy('nome')->get();
        return view('dados.index', ['dados' => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dado  $dado
     * @return \Illuminate\Http\Response
     */
    public function show(Dado $dado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dado  $dado
     * @return \Illuminate\Http\Response
     */
    public function edit(Dado $dado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dado  $dado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dado $dado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dado  $dado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dado $dado)
    {
        //
    }
}
