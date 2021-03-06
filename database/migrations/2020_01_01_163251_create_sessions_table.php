<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->bigIncrements('id_session');
            $table->date('date_lancement');
            $table->date('date_debut_p')->default(null);
            $table->date('date_fin_p')->default(null);
            $table->string('etat');
            $table->integer('pourcentage_p')->default(0);
            $table->float('prix_p');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->unsignedBigInteger('id_formation');
            $table->foreign('id_formation')->references('id_formation')->on("formations")->onDelete('cascade');
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
        Schema::dropIfExists('sessions');
    }
}
