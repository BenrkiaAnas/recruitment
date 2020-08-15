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
            $table->increments('candidate_id');
            $table->unsignedInteger('annouce_id')->unique();
            $table->foreign('annouce_id')->references('annouce_id')->on('annonces');
            $table->string('candidate_name',100);
            $table->string('candidate_email',100);
            $table->string('candidate_phone',40);
            $table->string('function',100)->nullable();
            $table->tinyInteger('experience');
            $table->tinyInteger('candidate_level_study');
            $table->string('atachement',255);
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
