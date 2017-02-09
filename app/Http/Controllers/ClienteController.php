<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Redirect;
class ClienteController extends Controller
{
    public function index(){
        $clientes = cliente::get();
        return view('cliente.lista', ['clientes'=> $clientes]);
    }
    public function novo(){

        return view('cliente.formulario');
    }

    public function salvar(Request $request){

        $cliente =new cliente();

        $cliente = $cliente->create($request->all());





        \Session::flash('mensagem_ok', 'Cliente Cadastrado Com sucesso!!');

        return \Redirect::to('clientes/novo');


    }

    public function editar($id)
    {
        $cliente = cliente::findOrFail($id);

       return view('cliente.formulario',['cliente'=>$cliente]);
    }

    public function  atualizar($id, Request $request)
    {
        $cliente = cliente::find($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_ok', 'Cliente Atualizado Com Sucesso!!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function deletar($id)
    {
        $cliente = cliente::find($id);

        $cliente->delete();

        \Session::flash('mensagem_ok', 'Cliente Excluído Com Sucesso!!');

        return Redirect::to('clientes/');

    }
}
