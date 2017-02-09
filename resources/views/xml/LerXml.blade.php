@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        XML's
                    </div>
                    <div class="panel-heading">

                        @if(Session::has('mensagem_ok'))
                            <div class="alert alert-success">{{Session::get('mensagem_ok')}}</div>
                        @endif

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
                                        <h4 class="modal-title">Carregar o Arquivo .xml</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="xml/LerXML" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <label>
                                                Importar
                                            </label>

                                            <input class ="form-control" type="file" name="arquivo">
                                            <hr>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection