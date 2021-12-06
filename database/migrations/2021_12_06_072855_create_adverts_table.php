<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('city')->nullable();            
            $table->string('price')->nullable();
            $table->string('email')->nullable();
            $table->boolean('chat')->default(0);
            $table->boolean('noEmail')->default(0);
            $table->string('subject')->nullable();
            $table->string('text')->nullable();
            $table->boolean('type')->default(0);
            $table->string('maker')->nullable();
            $table->string('date')->nullable();

            $table->foreignId('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            
            $table->foreignId('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
