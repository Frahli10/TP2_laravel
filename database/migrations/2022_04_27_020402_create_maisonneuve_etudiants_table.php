<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonneuveEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisonneuve_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('adresse',100);
            $table->string('phone',15);
            $table->string('email',100);
            $table->date('date_de_naissance');
            $table->integer('ville_id');
            $table->integer('user_id') ;
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
        Schema::dropIfExists('maisonneuve_etudiants');
    }
}
