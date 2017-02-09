<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade_especial extends Model
{
    protected $table = 'tbl_cidade_especial';

    protected $fillable = [
        'cgc_cpf',
        'divisao',
        'cidade',
        'estado',
        'cod_ibge'

    ];

}
