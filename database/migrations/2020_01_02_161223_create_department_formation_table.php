<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_formation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_department')->references('id_department')->on('departments');
            $table->unsignedBigInteger('id_formation');
            $table->foreign('id_formation')->references('id_formation')->on('formations');
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
        Schema::dropIfExists('department_formation');
    }
}
