<?php

namespace App\Http\Controllers;

use App\cidade_atendida;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Redirect;
class CidadeController extends Controller
{
    public function index()
    {
        $tbl_cidade_atendidas = cidade_atendida::get();


        return view('cidade.lista', ['tbl_cidade_atendidas'=>$tbl_cidade_atendidas]);
    }

    public function novo()
    {
        $tbl_cidade_atendidas = cidade_atendida::get();

        return view('cidade.formulario', ['tbl_cidade_atendidas'=>$tbl_cidade_atendidas]);
    }

    public function salvar(Request $request){

        $tbl_cidade_atendidas =new cidade_atendida();

        $tbl_cidade_atendidas = $tbl_cidade_atendidas->create($request->all());

        \Session::flash('mensagem_ok', 'Cidade Cadastrado Com sucesso!!');

        return \Redirect::to('CadCidade/novo');


    }

    public function editar($id)
    {
        $tbl_cidade_atendidas = cidade_atendida::findOrFail($id);

        return view('cidade.formulario',['tbl_cidade_atendidas'=>$tbl_cidade_atendidas]);
    }

    public function  atualizar($id, Request $request)
    {
        $tbl_cidade_atendidas = cidade_atendida::find($id);

        $tbl_cidade_atendidas->update($request->all());

        \Session::flash('mensagem_ok', 'Cidade Atualizado Com Sucesso!!');

        return Redirect::to('CadCidade/'.$tbl_cidade_atendidas->id.'/editar');
    }

    public function deletar($id)
    {
        $tbl_cidade_atendidas = cidade_atendida::find($id);

        $tbl_cidade_atendidas->delete();

        \Session::flash('mensagem_ok', 'Cidade Excluído Com Sucesso!!');

        return Redirect::to('CadCidade/');

    }
}
