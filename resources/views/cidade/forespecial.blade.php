@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da Cidade
                        <a class="pull-right" href="{{ url('CadEspecial')}}">Listagem de Cidades</a>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_ok'))
                            <div class="alert alert-success">{{Session::get('mensagem_ok')}}</div>
                        @endif
                        @if(Request::is('*/editar'))
                            {!! Form::model($CidEspeciais, ['method'=> 'PATCH', 'url' => 'CadEspecial/'.$CidEspeciais->id]) !!}
                        @endif
                        {!! Form::open(['url'=>'CadEspecial/salvar']) !!}

                        <div class="row col-md-offset-1">
                            <div class="col-sm-8">
                                {!! Form::label('cgc_cpf','Cnpj') !!}
                                {!! Form::input('text','cgc_cpf',null,['class'=> 'form-control', 'autofocus','placeholder'=> 'Cnpj', 'required']) !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::label('divisao','Divisão') !!}
                                {!! Form::input('text','divisao',null,['class'=> 'form-control', '','placeholder'=> 'Divisão', 'required']) !!}
                            </div>
                        </div>

                        <div class="row col-md-offset-1">
                            <div class="col-sm-8">
                                {!! Form::label('cidade','Cidade') !!}
                                {!! Form::input('text','cidade',null,['class'=> 'form-control', 'autofocus','placeholder'=> 'Cidade', 'required']) !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::label('estado','Estado') !!}
                                {!! Form::input('text','estado',null,['class'=> 'form-control', '','placeholder'=> 'Estado', 'required']) !!}
                            </div>
                        </div>
                        <div class="row col-md-offset-1">
                            <div class="col-md-2">
                                {!! Form::label('cod_ibge','IBGE') !!}
                                {!! Form::input('text','cod_ibge',null,['class'=> 'form-control', '','placeholder'=> 'IBGE', 'required']) !!}
                            </div>
                        </div>

                        <div class="row col-sm-10 col-md-offset-1">
                            <hr>
                        </div>
                        <div class="row col-sm-10 col-md-offset-1">
                            {!! Form::submit('Incluir', ['class'=> 'btn btn-warning']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection