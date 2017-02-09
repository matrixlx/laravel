@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações do Cliente
                        <a class="pull-right" href="{{ url('clientes')}}">Listagem de Clientes</a>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_ok'))
                            <div class="alert alert-success">{{Session::get('mensagem_ok')}}</div>
                        @endif
                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method'=> 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                        @endif
                        {!! Form::open(['url'=>'clientes/salvar']) !!}

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
                            <div class="col-md-10">
                                {!! Form::label('razao','Razão') !!}
                                {!! Form::input('text','razao',null,['class'=> 'form-control', '','placeholder'=> 'Razão', 'required']) !!}
                            </div>
                        </div>
                        <div class="row col-md-offset-1">
                            <div class="col-md-10">
                                {!! Form::label('fantasia','Fantasia') !!}
                                {!! Form::input('text','fantasia',null,['class'=> 'form-control', '','placeholder'=> 'Fantasia', 'required']) !!}
                            </div>
                        </div>

                        <div class="row col-sm-2 col-md-offset-1">
                            {!! Form::label('cep','Cep') !!}
                            {!! Form::input('text','cep',null,['class'=> 'form-control', '','placeholder'=> 'Cep', 'required']) !!}
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