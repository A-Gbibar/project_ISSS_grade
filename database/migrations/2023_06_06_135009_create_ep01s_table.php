<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEp01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ep01s', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('NomberEncadrants');
            $table->date('DateRealisation');
            $table->string('pageRapport')->nullable();
            $table->double('NoteLicenceB')->default(0);
            $table->double('NoteMaster')->default(0);
            $table->unsignedBigInteger('idP');
            $table->double('TotalEP01')->default(0);
            $table->foreign('idP')->references('idP')->on('encadement_Ps');
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
        Schema::dropIfExists('ep01s');
    }
}
