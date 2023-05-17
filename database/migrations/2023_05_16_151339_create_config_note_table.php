<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_note', function (Blueprint $table) {
            $table->double('NPP01')->whereNotNull('NPP01');
            $table->double('NPP01_Max')->whereNotNull('NPP01_Max');
            $table->double('NPP02')->whereNotNull('NPP02');
            $table->double('NPP02_Max')->whereNotNull('NPP02_Max');
            $table->double('NPP03')->whereNotNull('NPP03');
            $table->double('NPP03_Max')->whereNotNull('NPP03_Max');
            $table->double('NEP01')->whereNotNull('NEP01');
            $table->double('NEP01_Max')->whereNotNull('NEP01_Max');
            $table->double('NEP02')->whereNotNull('NEP02');
            $table->double('NEP02_Max')->whereNotNull('NEP02_Max');
            $table->double('NEP03')->whereNotNull('NEP03');
            $table->double('NEP03_Max')->whereNotNull('NEP03_Max');
            $table->double('NEP04')->whereNotNull('NEP04');
            $table->double('NEP04_Max')->whereNotNull('NEP04_Max');
            $table->double('NEP05')->whereNotNull('NEP05');
            $table->double('NEP05_Max')->whereNotNull('NEP05_Max');
            $table->double('NEP06')->whereNotNull('NEP06');
            $table->double('NEP06_Max')->whereNotNull('NEP06_Max');
            $table->double('NRPA01')->whereNotNull('NRPA01');
            $table->double('NRPA01_Max')->whereNotNull('NRPA01_Max');
            $table->double('NRPA02')->whereNotNull('NRPA02');
            $table->double('NRPA02_Max')->whereNotNull('NRPA02_Max');
            $table->double('NRPA03')->whereNotNull('NRPA03');
            $table->double('NRPA03_Max')->whereNotNull('NRPA03_Max');
            $table->double('NRPA04')->whereNotNull('NRPA04');
            $table->double('NRPA04_Max')->whereNotNull('NRPA04_Max');
            $table->double('NRPA05')->whereNotNull('NRPA05');
            $table->double('NRPA05_Max')->whereNotNull('NRPA05_Max');
            $table->double('NRPA06')->whereNotNull('NRPA06');
            $table->double('NRPA06_Max')->whereNotNull('NRPA06_Max');
            $table->double('NRPA07')->whereNotNull('NRPA07');
            $table->double('NRPA07_Max')->whereNotNull('NRPA07_Max');
            $table->double('NRPA08')->whereNotNull('NRPA08');
            $table->double('NRPA08_Max')->whereNotNull('NRPA08_Max');
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
        Schema::dropIfExists('config_note');
    }
}
