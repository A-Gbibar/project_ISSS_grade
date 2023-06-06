<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadementPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadement_ps', function (Blueprint $table) {
            $table->unsignedBigInteger('idP');
            $table->double('TotalEP')->default(0);
            $table->foreign('idP')->references('idP')->on('d_proffesseurs');
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
        Schema::dropIfExists('encadement__p_s');
    }
}
