<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpa02sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpa02s', function (Blueprint $table) {
            $table->id();
            $table->enum('MembreConseil' , ['établissement' , 'Université']);
            $table->double('NomberMandat')->default(0);
            $table->unsignedBigInteger('idP');
            $table->double('TotalRP02')->default(0);
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
        Schema::dropIfExists('rpa02s');
    }
}
