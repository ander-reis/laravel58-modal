@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <h1>list two</h1>

            {{ Form::open(['route' => 'list.store']) }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Estado</label>
                        {{ Form::select('ds_estado', \App\Http\Controllers\CurriculoController::siglaEstados(), (isset($model->ds_estado) ? $model->ds_estado : null), ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nível Atuação</label>
                        {{ Form::select('int_nivel_atuacao', \App\CurriculosNivelAtuacao::orderBy('ds_nivel_atuacao')->pluck( 'ds_nivel_atuacao', 'id_nivel_atuacao'), null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Formação</label>
                        {{ Form::select('int_formacao', \App\CurriculosFormacao::orderBy('ds_formacao')->pluck( 'ds_formacao', 'id_formacao'), null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Disciplina</label>
                        {{ Form::select('int_disciplina', \App\CurriculosDisciplinas::orderBy('ds_disciplina')->pluck('ds_disciplina', 'id_disciplina'), null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">enviar</button>

            {{ Form::close() }}

        </div>
    </div>
@endsection
