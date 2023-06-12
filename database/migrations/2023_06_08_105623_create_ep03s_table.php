<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEp03sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ep03s', function (Blueprint $table) {
            $table->id();
            $table->string('Formation');
            $table->string('pagePDF')->nullable();
            $table->unsignedBigInteger('idP');
            $table->double('TotalEP03');
            $table->foreign('idP')->references('idP')->on('encadement_ps');
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
        Schema::dropIfExists('ep03s');
    }
}
