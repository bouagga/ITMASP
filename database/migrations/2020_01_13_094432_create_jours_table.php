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
            $table->unsignedBigInteger('id_creneaus');
            $table->foreign('id_creneaus')->references('id_creneaus')->on('creneaus');

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
