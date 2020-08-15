<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->string('Title',$lenght=40);
            $table->text('Description');
            $table->tinyInteger('city');
            $table->string('picture',50);            
            $table->dateTime('annonce_date');
            $table->tinyInteger('contrat');
            $table->tinyInteger('annonce_status');
            $table->string('company_name',10);
            $table->integer('salary');
            $table->tinyInteger('level_study');
            $table->string('function',20);
            $table->string('company_phone',10);
            $table->string('anouncer_name',10);
            $table->string('company_email',20);
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
        Schema::dropIfExists('annonces');
    }
}
