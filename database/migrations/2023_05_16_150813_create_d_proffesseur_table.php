<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Psy\VersionUpdater\Checker;

class CreateDProffesseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_proffesseurs', function (Blueprint $table) {
            $table->unsignedBigInteger('idP')->autoIncrement();
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('departATT');
            $table->date('dateRecrut');
            $table->string('PPR')->unique();
            $table->string('grad');
            $table->date('dateEffet');
            $table->enum('TypeAvancement' , array('exceptionnel' , 'rapide' , 'normal'));
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
        Schema::dropIfExists('_d__proffesseur');
    }
}
