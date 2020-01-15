<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowTheaterStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_theater_studios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('show_id');
            $table->unsignedBigInteger('theater_id');
            $table->unsignedBigInteger('studio_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedBigInteger('total_price');
            $table->boolean('status')->default(0)->comment('is already full ?');
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
        Schema::dropIfExists('show_theater_studios');
    }
}
