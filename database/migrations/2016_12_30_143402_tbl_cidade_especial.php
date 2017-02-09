<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCidadeEspecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cidade_especial', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('cgc_cpf',14);
            $table->string('divisao',5);
            $table->string('cidade',30);
            $table->string('estado',5);
            $table->string('cod_ibge',8);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_cidade_especial');
    }
}
