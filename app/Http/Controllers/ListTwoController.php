<?php

namespace App\Http\Controllers;

use App\CurriculosProfessores;
use Illuminate\Http\Request;
use Website\Models\CurriculoProfessor;

class ListTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list-two.index');
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
        $uf = $request->ds_estado;
        $atuacao = $request->int_nivel_atuacao;
        $formacao = $request->int_formacao;
        $disciplina = $request->int_disciplina;

        $collection = CurriculosProfessores::where('int_ativo', 1)
            ->when($uf, function ($q, $uf) {
                return $q->where('ds_estado', $uf);
            })
            ->when($atuacao, function ($q, $atuacao) {
                return $q->where('int_nivel_atuacao', $atuacao);
            })
            ->when($formacao, function ($q, $formacao) {
                return $q->where('int_formacao', $formacao);
            })
            ->when($disciplina, function ($q, $disciplina) {
                return $q->where('int_disciplina', $disciplina);
            })
//            ->whereRaw('DATEDIFF(MONTH, dt_data_ult_atualizacao, GETDATE()) < 18')
            ->get(['id_curriculo', 'ds_nome', 'ds_cidade', 'ds_estado']);


        return view('list-two.show', compact('collection'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
