<?php

namespace App\Http\Controllers;

use App\xml;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LerXmlController extends Controller
{
    public function index()
    {

        $LerXml = xml::get();
        return view('xml.LerXml', ['LerX'=>$LerXml]);
    }

    public function lerXML()
    {
        $file = Input::file('arquivo');
        $xml = simplexml_load_file($file);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);

        $Gravar =new xml();
        $Gravar = $Gravar->create($array);

        \Session::flash('mensagem_ok', 'XML Cadastrado Com sucesso!!');
        return \Redirect::to('xml');

    }
}
