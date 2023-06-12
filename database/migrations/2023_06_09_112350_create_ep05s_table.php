<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEp05sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ep05s', function (Blueprint $table) {
            $table->id();
            $table->integer('NomberSortie')->default(0);
            $table->unsignedBigInteger('idP');
            $table->double('TotalEP05')->default(0);
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
        Schema::dropIfExists('ep05s');
    }
}
