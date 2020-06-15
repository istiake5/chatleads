<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->strting('name');
            $table->strting('slug');
            $table->text('description');
            $table->timestamps('release');
            $table->timestamps('date');
            $table->tinyInteger('rating')->nullable();
            $table->strting('ticket');
            $table->double('price', 8, 2)->nullable();
            $table->strting('country');
            $table->strting('genre');
            $table->strting('photo');

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
        Schema::dropIfExists('movies');
    }
}
