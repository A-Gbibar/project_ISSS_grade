<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpa01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpa01s', function (Blueprint $table) {
            $table->id();
            $table->enum('NatureResponsabilite' , ['Directeur' , 'Chef de département' , 'Coordonnateur de filiére']);
            $table->integer('NomberMandat')->nullable();
            $table->integer('anneeResponsabilite')->nullable();
            $table->double('NDirecteur');
            $table->double('NChef');
            $table->double('NCoordonnateur');
            $table->unsignedBigInteger('idP');
            $table->double('TotalRPA01');
            $table->foreign('idP')->references('idP')->on('responsabilite_pas');
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
        Schema::dropIfExists('rpa01s');
    }
}
