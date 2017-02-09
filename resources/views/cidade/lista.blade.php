@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de cidades

                        <a class="pull-right" href="{{ url('CadCidade/novo')}}">Nova Cidade</a>
                    </div>
                    <div class="panel-heading">

                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            importar
                        </button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Carregar o Arquivo .xls</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action ="CadCidade/postImport" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <label>
                                                Importar
                                            </label>
                                            <input type="file" name="arquivo">
                                            <button class="btn btn-info" type="submit">
                                                Importar
                                            </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Exportar</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu" id="export-menu">
                                <li id="export-para-excel">
                                    <a href="{{ url('CadCidade/GerarExcel') }}">
                                        <span class="glyphicon glyphicon-plus"></span> Exportar em Excel
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_ok'))
                            <div class="alert alert-success">{{Session::get('mensagem_ok')}}</div>
                        @endif
                        <table class="table table-bordered">
                            <th>CIDADE</th>
                            <th>ESTADO</th>
                            <th>CODIGO IBGE</th>
                            <th>AÇÕES</th>

                            <tbody>
                            @foreach( $tbl_cidade_atendidas as $tbl_cidade_atendida)
                                <tr>
                                    <td>{{ $tbl_cidade_atendida->cidade }}</td>
                                    <td>{{ $tbl_cidade_atendida->estado }}</td>
                                    <td>{{ $tbl_cidade_atendida->cod_ibge}}</td>

                                    <td>
                                        <a href="CadCidade/{{$tbl_cidade_atendida-> id}}/editar"
                                           class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method'=> 'DELETE', 'url'=> 'CadCidade/'.$tbl_cidade_atendida->id, 'style'=> 'display: inline']) !!}
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