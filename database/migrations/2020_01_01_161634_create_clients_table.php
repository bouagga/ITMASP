<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id_client');
            $table->string('nom');
            $table->string('prenom');
            $table->string('address');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->integer('clienttable_id');
            $table->string('clienttable_type');
            $table->unsignedBigInteger('id_formation');
            $table->foreign('id_formation')->references('id_formation')->on("formations");
            $table->unsignedBigInteger('id_preinscription');
            $table->foreign('id_preinscription')->references('id_preinscription')->on("preinscriptions");
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
        Schema::dropIfExists('clients');
    }
}
