<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravellerTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travellerTrips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->index('trip_id');
            $table->foreign('trip_id')->references('id')->on('trips')
                                    ->onDelete('cascade');
            $table->string('traveller_passportNo');
            $table->index('traveller_passportNo');
            $table->foreign('traveller_passportNo')->references('passportNumber')
            ->on('travellers')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travellerTrips');
    }
}
