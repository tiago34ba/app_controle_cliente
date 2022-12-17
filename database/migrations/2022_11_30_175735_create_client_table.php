<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->timestamp('dt_cadastro')->nullable();
            $table->timestamp('dt_situacao')->nullable();
            $table->string('nu_telefone',20)->nullable();
            $table->string('nu_celular',20)->nullable();
            $table->string('nm_cliente',200)->nullable();
            $table->string('ds_razao_social',200)->nullable();
            $table->string('ds_nome_fantasia',200)->nullable();
            $table->string('nu_documento',20)->nullable();
            $table->timestamp('dt_cadastro_cerc')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('email',50)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
};
