<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsabilitePasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilite_pas', function (Blueprint $table) {
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
        Schema::dropIfExists('responsabilite_pas');
    }
}
