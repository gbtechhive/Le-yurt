<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirPlaneTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_plane_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('leavingFrom');
            $table->string('leavingTo');
            $table->date('departureDate');
            $table->date('date');
            $table->string('cellno');
            $table->string('numberOFChilds');
            $table->bigInteger('status')->default(0);
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
        Schema::dropIfExists('air_plane_tickets');
    }
}
