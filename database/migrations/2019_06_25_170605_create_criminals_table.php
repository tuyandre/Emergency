<?php

use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
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
           $table->string('latitude')->nullable();
           $table->string('longitude')->nullable();
           $table->string('audio')->nullable();
           $table->string('photo')->nullable();
           $table->string('type')->nullable();
           $table->integer('status')->default(0);
           $table->string('date')->default(new Carbon());
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
