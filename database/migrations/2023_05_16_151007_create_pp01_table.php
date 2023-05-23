<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePP01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp01s', function (Blueprint $table) {
            $table->bigIncrements('idPP01');
            $table->enum('type' , ['Ouvrages' , 'manuels' , 'liver']);
            $table->string('maisonEdition');
            $table->string('avoir');
            $table->string('titre');
            $table->string('auteur');
            $table->string('niveu');
            $table->date('dateEdition');
            $table->integer('NDepot' );
            $table->double('note')->whereNotNull('NCour')->default(0);
            $table->unsignedBigInteger('idProuduction');
            $table->foreign('idProuduction')->references('id_PP')->on('production_ps');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_p_p01');
    }
}
