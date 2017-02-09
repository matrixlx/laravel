<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade_atendida extends Model
{
    protected $table = 'tbl_cidade_atendidas';
    protected $fillable = [
        'cidade',
        'estado',
        'cod_ibge'
    ];
}

