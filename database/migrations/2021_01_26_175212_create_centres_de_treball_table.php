<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentresDeTreballTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetres_de_treball', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empresa_id');
            $table->string('name');
            $table->string('direction');
            $table->string('poblation');
            $table->string('cp', 5);
            $table->string('mainActivity');
            $table->unsignedInteger('numOfWorkers');
            $table->string('email');
            $table->unsignedInteger('tlf1');
            $table->unsignedInteger('tlf2')->nullable();
            $table->unsignedInteger('fax')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empreses');
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
        Schema::dropIfExists('cetres_de_treball');
    }
}
