<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cidade_especial;

use App\Http\Controllers\Controller;

use Redirect;

class CidEspecial extends Controller
{
    public function index()
    {

        $CidEspeciais = cidade_especial::get();
        return view('cidade.EspecialLista', ['CidEspecial'=>$CidEspeciais]);
    }

    public function novo()
    {
        $CidEspeciais = cidade_especial::get();

        return view('cidade.forespecial', ['CidEspecial'=>$CidEspeciais]);
    }

    public function salvar(Request $request){

        $CidEspeciais =new cidade_especial();

        $CidEspeciais = $CidEspeciais->create($request->all());

        \Session::flash('mensagem_ok', 'Cidade Cadastrado Com sucesso!!');

        return \Redirect::to('CadEspecial/novo');


    }

    public function editar($id)
    {
        $CidEspeciais = cidade_especial::find($id);

        return view('cidade.forespecial',['CidEspeciais'=>$CidEspeciais]);
    }

    public function  atualizar($id, Request $request)
    {
        $CidEspeciais = cidade_especial::find($id);

        $CidEspeciais->update($request->all());

        \Session::flash('mensagem_ok', 'Cidade Atualizado Com Sucesso!!');

        return Redirect::to('CadEspecial/'.$CidEspeciais->id.'/editar');
    }

    public function deletar($id)
    {
        $CidEspeciais = cidade_especial::find($id);

        $CidEspeciais->delete();

        \Session::flash('mensagem_ok', 'Cidade Excluído Com Sucesso!!');

        return Redirect::to('CadEspecial/');

    }
}
