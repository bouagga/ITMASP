<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jours', function (Blueprint $table) {
            $table->bigIncrements('id_jour');
            $table->string('jour');
            $table->boolean('slot1');
            $table->boolean('slot2');
            $table->boolean('slot3');
            $table->unsignedBigInteger('id_preinscription')->nullable();
            $table->foreign('id_preinscription')->references('id_preinscription')->on('preinscriptions');

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
        Schema::dropIfExists('jours');
    }
}
