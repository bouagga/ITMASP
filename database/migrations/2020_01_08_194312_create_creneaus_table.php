<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreneausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creneaus', function (Blueprint $table) {
            $table->bigIncrements('id_creneaus');
            $table->string('jour');
            $table->string('debut');
            $table->string('fin');
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
        Schema::dropIfExists('creneaus');
    }
}
