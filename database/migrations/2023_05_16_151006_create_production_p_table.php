<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_ps', function (Blueprint $table) {
             $table->unsignedBigInteger('id_PP');
             $table->foreign('id_PP')->references('idP')->on('d_proffesseurs');
             $table->double('TotalPP' , 5)->default(0);
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
        Schema::dropIfExists('production_p');
    }
}
