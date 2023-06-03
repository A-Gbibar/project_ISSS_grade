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
        Schema::create('pp02s', function (Blueprint $table) {
            $table->bigIncrements('idPP02');
            $table->enum('TypePolycopies', ['Cours' , 'TP' , 'TD' , 'Examens' , 'Auter']);
            $table->date('dateDiffusion');
            $table->year('AnneeElaboration');
            $table->string('NiveauEtude');
            $table->enum('typeTravail' , ['individuel' , 'collectif']);
            $table->integer('NomberCollectif')->where('typeTravail' , 'collectif')->nullable();
            $table->double('NCour')->whereNotNull('NCour')->default(0);
            $table->integer('NTD')->whereNotNull('NTD')->default(0);
            $table->integer('NExam')->whereNotNull('NExam')->default(0);
            $table->integer('NTP')->whereNotNull('NTP')->default(0);
            $table->integer('NAuter')->whereNotNull('NAuter')->default(0);
            $table->double('NTotal' )->whereNotNull('NTotal')->default(0);
            $table->unsignedBigInteger('idProuduction');
            $table->foreign('idProuduction')->references('id_PP')->on('production_ps');
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
