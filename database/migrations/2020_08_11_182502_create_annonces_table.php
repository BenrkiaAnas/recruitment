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
            $table->increments('annouce_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->string('title',200);
            $table->text('description');
            $table->tinyInteger('city');
            $table->string('picture',255);            
            $table->dateTime('annonce_date');
            $table->tinyInteger('contract')->default(0);
            $table->string('company_name',50)->nullable();
            $table->integer('salary')->default(0);
            $table->tinyInteger('level_study')->default(0);
            $table->string('function',100)->nullable();
            $table->string('company_phone',40);
            $table->string('anouncer_name',50);
            $table->string('company_email',100);
            $table->tinyInteger('status');
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
