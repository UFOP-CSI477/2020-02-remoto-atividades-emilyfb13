<?php

namespace App\Http\Controllers;

use App\Models\Geral;
use App\Models\Vacina;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dose_unica = DB::select('select id from registros where dose = ?', [0]);
        $primeira_dose = DB::select('select id from registros where dose = ?', [1]);
        $segunda_dose = DB::select('select id from registros where dose = ?', [2]);

        $total_dose_unica = count($dose_unica);
        $total_primeira_dose = count($primeira_dose);
        $total_segunda_dose = count($segunda_dose);
        $total_geral = $total_dose_unica + $total_primeira_dose + $total_segunda_dose;

        $quantidade_vacina = DB::table('registros')->select('vacina_id',  DB::raw('COUNT(id) as soma'))->groupBy('vacina_id')->havingRaw('COUNT(id)')->get();

        $vacina = Vacina::orderBy('id')->get();

       $registros = count(Registro::orderBy('id')->get());

        return view('geral.index',  ['total_dose_unica'=>$total_dose_unica, 'total_primeira_dose'=>$total_primeira_dose, 'total_segunda_dose'=>$total_segunda_dose, 'total_geral'=>$total_geral, 'quantidade_vacina'=> $quantidade_vacina, 'vacina'=>$vacina, 'registros'=>$registros]);
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
     * @param  \App\Models\Geral  $geral
     * @return \Illuminate\Http\Response
     */
    public function show(Geral $geral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Geral  $geral
     * @return \Illuminate\Http\Response
     */
    public function edit(Geral $geral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Geral  $geral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Geral $geral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Geral  $geral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geral $geral)
    {
        //
    }
}
