<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminals', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->integer('populations_id')->unsigned();
           $table->string('Message')->nullable();
           $table->string('location')->nullable();
           $table->string('audio')->nullable();
           $table->string('photo')->nullable();
           $table->string('type')->nullable();

          // $table->foreign('people_id')->references('id')->on('people');
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
        Schema::dropIfExists('criminals');
    }
}
