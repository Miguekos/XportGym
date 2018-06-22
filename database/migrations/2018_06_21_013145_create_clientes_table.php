<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_cli')->nullable();
            $table->string('dni')->nullable();
            $table->string('telf')->nullable();
            $table->integer('promo')->nulleable()->unsigned();
            $table->foreign('promo')->references('id')->on('promos');
            $table->string('domicilio')->nullable();
            $table->string('boleta')->nullable();
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->date('fecha_alert')->nullable();
            $table->string('monto')->nullable();
            $table->string('pago')->nullable();
            $table->string('deuda')->nullable();
            $table->string('forma_de_pago')->nullable();
            $table->string('nota')->nullable();
            $table->string('user_nombre')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
