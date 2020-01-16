<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_ticket')->unique();
            $table->unsignedBigInteger('theater_id');
            $table->unsignedBigInteger('show_id');
            $table->unsignedBigInteger('studio_id');
            $table->unsignedBigInteger('total_price');
            $table->unsignedBigInteger('persons');
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
        Schema::dropIfExists('ticket_reservations');
    }
}
