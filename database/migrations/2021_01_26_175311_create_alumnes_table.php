<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('coordin_id');
            $table->unsignedBigInteger('tutor_id');
            $table->string('name');
            $table->string('surname1');
            $table->string('surname2')->nullable();
            $table->enum('typeOfWorkingDay', ['continued', 'partTime']);
            $table->string('schedule');
            $table->string('workplace');
            $table->foreign('empresa_id')->references('id')->on('empreses');
            $table->foreign('coordin_id')->references('id')->on('coordinadors_fct');
            $table->foreign('tutor_id')->references('id')->on('tutors_empresa');
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
        Schema::dropIfExists('alumnes');
    }
}
