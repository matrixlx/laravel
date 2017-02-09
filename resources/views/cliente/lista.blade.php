@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Clientes
                        <a class="pull-right" href="{{ url('clientes/novo')}}">Novo Cliente</a>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_ok'))
                            <div class="alert alert-success">{{Session::get('mensagem_ok')}}</div>
                        @endif

                            <table class="table table-bordered">
                                <th>CNPJ</th>
                                <th>DIVISÃO</th>
                                <th>RAZÃO</th>
                                <th>FANTASIA</th>
                                <th>AÇÕES</th>
                                <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->cgc_cpf }}</td>
                                        <td>{{ $cliente->divisao }}</td>
                                        <td>{{ $cliente->razao}}</td>
                                        <td>{{ $cliente->fantasia}}</td>
                                        <td>
                                            <a href="clientes/{{ $cliente-> id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                            {!! Form::open(['method'=> 'DELETE', 'url'=> 'clientes/'.$cliente->id, 'style'=> 'display: inline']) !!}
                                            <button type="submit" class="btn  btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection