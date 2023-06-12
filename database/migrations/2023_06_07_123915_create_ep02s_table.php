<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEp02sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ep02s', function (Blueprint $table) {
            $table->id();
            $table->string('pagePDF')->nullable();
            $table->date('DateRealisation');
            $table->unsignedBigInteger('idP');
            $table->double('TotalEP02');
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
        Schema::dropIfExists('ep02s');
    }
}
