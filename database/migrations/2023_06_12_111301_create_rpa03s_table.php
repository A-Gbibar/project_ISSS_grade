<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpa03sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpa03s', function (Blueprint $table) {
            $table->id();
            $table->string('Commissions');
            $table->double('NomberMandat')->default(0);
            $table->double('NomberCommissions')->default(0);
            $table->unsignedBigInteger('idP');
            $table->double('TotalRP03')->default(0);
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
        Schema::dropIfExists('rpa03s');
    }
}
