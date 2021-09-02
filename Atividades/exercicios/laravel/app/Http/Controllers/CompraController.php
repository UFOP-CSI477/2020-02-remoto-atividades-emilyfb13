<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Pessoa;
use App\Models\Produto;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compra = Compra::orderBy('id')->get();
        return view('compras.index', [ 'compra' => $compra ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = Pessoa::orderBy('nome')->get();
        $produto = Produto::orderBy('nome')->get();
        return view('compras.create', ['pessoa' => $pessoa, 'produto' => $produto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Compra::create($request->all());
        session()->flash('mensagem', 'Compra inserida com sucesso!');
        return redirect()->route('compra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        return view('compras.show', ['compra' => $compra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        $pessoa = Pessoa::orderBy('nome')->get();
        $produto = Produto::orderBy('nome')->get();
        return view('compras.edit',
            ['compra' => $compra,
             'pessoa' => $pessoa,
            'produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        $compra->fill($request->all());
        $compra->save();

        session()->flash('mensagem', 'Compra atualizada com sucesso!');
        return redirect()->route('compra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        $compra->delete();
        session()->flash('mensagem', 'Compra excluída com sucesso!');
        return redirect()->route('compra.index');
    }
}
