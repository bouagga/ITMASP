<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppelSortantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appel_sortants', function (Blueprint $table) {
            $table->bigIncrements('id_appelsortant');
            $table->string('subject');
            $table->string('corp');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id_client')->on('clients');
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
        Schema::dropIfExists('appel_sortants');
    }
}
