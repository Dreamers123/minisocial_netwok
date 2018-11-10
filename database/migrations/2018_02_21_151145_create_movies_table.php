<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fav_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->text('image_link');
            $table->text('quote');
            $table->text('details');
            $table->text('trailers');
            $table->text('casts');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('fav_movies');
    }
}
