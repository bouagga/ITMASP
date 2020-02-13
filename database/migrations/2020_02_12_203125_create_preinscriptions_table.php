<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreinscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preinscriptions', function (Blueprint $table) {
            $table->bigIncrements('id_preinscription');
            $table->integer('TarifG');
            $table->integer('Reduction');
            $table->integer('TarifF');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id_client')->on('clients');
            $table->unsignedBigInteger('id_session');
            $table->foreign('id_session')->references('id_session')->on('sessions');
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
        Schema::dropIfExists('preinscriptions');
    }
}
