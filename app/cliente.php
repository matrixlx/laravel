<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  cliente extends Model
{

    protected $fillable = [
        'cgc_cpf',
        'divisao',
        'razao',
        'fantasia',
        'cep'
    ];
}