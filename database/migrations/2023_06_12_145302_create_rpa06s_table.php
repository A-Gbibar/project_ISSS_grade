<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpa06sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpa06s', function (Blueprint $table) {
            $table->id();
            $table->integer('NomberCommission');
            $table->unsignedBigInteger('idP');
            $table->double('TotalRPA06')->default(0);
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
        Schema::dropIfExists('rpa06s');
    }
}
