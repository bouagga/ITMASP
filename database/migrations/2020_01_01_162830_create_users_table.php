<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
//            $table->unsignedBigInteger('id_formation')->default('0');
//            $table->foreign('id_formation')->references('id_formation')->on('formations');
//            $table->unsignedBigInteger('id_client')->unsigned();
//            $table->foreign('id_client')->references('id_client')->on('clients');
//            $table->unsignedBigInteger('id_preinscription');
//            $table->foreign('id_preinscription')->references('id_preinscription')->on('preinscriptions');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
