<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_models', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cli_int_id');
            $table->string('cli_str_nome');
            $table->string('cli_str_logradouro')->nullable();
            $table->integer('cli_int_numero')->nullable();
            $table->text('cli_tex_complemento')->nullable();
            $table->string('cli_str_fone1')->nullable();
            $table->string('cli_str_fone2')->nullable();
            $table->string('cli_str_fone3')->nullable();
            $table->string('cli_str_cep')->nullable();
            $table->string('cli_str_cidade')->nullable();
            $table->string('cli_str_email')->nullable();
            $table->string('cli_str_bairro')->nullable();
            $table->string('cli_str_estado')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_models');
    }
}
