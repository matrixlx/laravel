<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::get('clientes', 'ClienteController@index');
    Route::get('clientes/novo', 'ClienteController@novo');
    Route::post('clientes/salvar', 'ClienteController@salvar');
    Route::patch('clientes/{cliente}', 'ClienteController@atualizar');
    Route::delete('clientes/{cliente}', 'ClienteController@deletar');
    Route::get('clientes/{cliente}/editar', 'ClienteController@editar');

    Route::get('CadCidade', 'CidadeController@index');
    Route::get('CadCidade/novo', 'CidadeController@novo');
    Route::post('CadCidade/salvar', 'CidadeController@salvar');
    Route::patch('CadCidade/{tbl_cidade_atendida}', 'CidadeController@atualizar');
    Route::delete('CadCidade/{tbl_cidade_atendida}', 'CidadeController@deletar');
    Route::get('CadCidade/{tbl_cidade_atendida}/editar', 'CidadeController@editar');
    Route::get('CadCidade/GerarExcel', 'GerarExcelController@Gerar');
    Route::post('CadCidade/postImport', 'GerarExcelController@postImport');

    Route::get('CadEspecial', 'CidEspecial@index');
    Route::get('CadEspecial/novo', 'CidEspecial@novo');
    Route::post('CadEspecial/salvar', 'CidEspecial@salvar');
    Route::patch('CadEspecial/{CidEspecial}', 'CidEspecial@atualizar');
    Route::delete('CadEspecial/{CidEspecial}','CidEspecial@deletar');
    Route::get('CadEspecial/{CidEspecial}/editar', 'CidEspecial@editar');
    Route::get('CadEspecial/GerarExcel', 'GerarExcelController@GerarEsp');
    Route::post('CadEspecial/postImport', 'GerarExcelController@postImportEsp');


    Route::get('xml', 'LerXmlController@index');
    Route::post('xml/LerXML', 'LerXmlController@lerXML');

});