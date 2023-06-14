<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpa07sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpa07s', function (Blueprint $table) {
            $table->id();
            $table->integer('NomberCommission');
            $table->unsignedBigInteger('idP');
            $table->double('TotalRPA07')->default(0);
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
        Schema::dropIfExists('rpa07s');
    }
}
