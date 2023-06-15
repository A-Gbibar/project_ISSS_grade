<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitePedagogiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_pedagogiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idP');
            $table->double('TotalAP')->default(0);
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
        Schema::dropIfExists('activite_pedagogiques');
    }
}
