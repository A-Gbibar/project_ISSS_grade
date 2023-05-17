<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePp03Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp03', function (Blueprint $table) {
            $table->bigIncrements('idPP03');
            $table->string('diaporamas');
            $table->string('lineSiteWeb');
            $table->string('lineSupportVideo');
            $table->date('dateDiffusion');
            $table->double('NDiaporames')->whereNotNull('NDiaporames')->default(0);
            $table->integer('NsiteWeb')->whereNotNull('NsiteWeb')->default(0);
            $table->integer('Nvideo')->whereNotNull('Nvideo')->default(0);
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
        Schema::dropIfExists('pp03');
    }
}
