<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbalunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbaluno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula', 30);
            $table->string('nome', 40);
            $table->string('endereco', 100);
            $table->string('bairro', 50);
            $table->string('cep', 50);
            $table->string('cidade', 50);
            $table->string('uf', 50);
            $table->string('email', 50);
            $table->datetime('dtentrada', 50);
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
        Schema::dropIfExists('tbaluno');
    }
}
