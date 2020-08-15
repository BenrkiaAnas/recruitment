<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('annonce_id')->unique();
            $table->foreign('annonce_id')->references('id')->on('annonces');
            $table->string('candidate_name',$length=20);
            $table->string('candidate_email',$length=50);
            $table->string('candidate_phone',$length=10);
            $table->string('function',$length=20);
            $table->tinyInteger('experience');
            $table->tinyInteger('candidate_level_study');
            $table->string('atachement',$length=255);
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
        Schema::dropIfExists('candidates');
    }
}
