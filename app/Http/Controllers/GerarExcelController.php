<?php

namespace App\Http\Controllers;


use App\Http\Request;
use App\Http\Controllers\Controller;
use App\cidade_atendida;
use App\cidade_especial;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class GerarExcelController extends Controller
{
    public function Gerar()
    {
        $Dados = cidade_atendida::all();

        Excel::create('panilha Exportada', function ($excel) use ($Dados) {
            $excel->sheet('Sheetname', function ($sheet) use ($Dados) {
                $sheet->fromArray($Dados);
            });
        })->export('xls');
    }


    public function postImport()
    {
        Excel::load(Input::file('arquivo'), function ($ler) {
            $ler->each(function ($sheet) {
                cidade_atendida::firstOrCreate($sheet->toArray());
            });
        });

        return back();
    }

    public function GerarEsp()
    {
        $Dados = cidade_especial::all();

        Excel::create('panilha Exportada', function ($excel) use ($Dados) {
            $excel->sheet('Sheetname', function ($sheet) use ($Dados) {
                $sheet->fromArray($Dados);
            });
        })->export('xls');
    }


    public function postImportEsp()
    {
        Excel::load(Input::file('arquivo'), function ($ler) {
            $ler->each(function ($sheet) {
                cidade_especial::firstOrCreate($sheet->toArray());

            });
        });

        return back();
    }
}

