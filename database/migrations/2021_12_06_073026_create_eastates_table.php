<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEastatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eastates', function (Blueprint $table) {
            $table->id();
            $table->string('area')->nullable();
            $table->string('deposit')->nullable();
            $table->string('ren')->nullable();
            $table->string('number')->nullable();
            
            $table->foreignId('advert_id')->unsigned();
            $table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eastates');
    }
}
