<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cif')->unique();
            $table->string('direction');
            $table->string('poblation');
            $table->char('cp', 5);
            $table->char('tlf1', 9);
            $table->char('tlf2', 9)->nullable();
            $table->unsignedInteger('fax')->nullable();
            $table->string('email');
            $table->enum('sector', ['primary', 'secondary', 'tertiary']);
            $table->string('mainActivity');
            $table->enum('ownership', ['private', 'public']);
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
        Schema::dropIfExists('empreses');
    }
}
