<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePP02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp02', function (Blueprint $table) {
            $table->bigIncrements('idPP02');
            $table->string('TD');
            $table->string('cours');
            $table->string('examens avec correction');
            $table->string('TP');
            $table->date('dateDiffusion');
            $table->enum('typeTravail' , ['individeuel' , 'collectif']);
            $table->double('NCour')->whereNotNull('NCour')->default(0);
            $table->integer('NTD')->whereNotNull('NTD')->default(0);
            $table->integer('NExam')->whereNotNull('NExam')->default(0);
            $table->integer('NTP')->whereNotNull('NTP')->default(0);
            $table->double('NTotal' )->whereNotNull('NTotal')->default(0);
            $table->unsignedBigInteger('idProuduction');
            $table->foreign('idProuduction')->references('id_PP')->on('production_p');

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
        Schema::dropIfExists('_p_p02');
    }
}
