<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCidadeAtendida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cidade_atendidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cidade', 30);
            $table->string('estado',5);
            $table->string('cod_ibge',15);
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
        Schema::drop('tbl_cidade_atendidas');
    }
}
