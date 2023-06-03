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
        Schema::create('pp03s', function (Blueprint $table) {
            $table->bigIncrements('idPP03');
            $table->date('dateDiffusion')->nullable();
            $table->string('lineSiteVideo')->nullable();
            $table->double('NDiaporames')->whereNotNull('NDiaporames')->default(0);
            $table->double('NvideoSiteWeb')->whereNotNull('NvideoSiteWeb')->default(0);
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
        Schema::dropIfExists('pp03');
    }
}
