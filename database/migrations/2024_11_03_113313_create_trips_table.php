<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('associate_id');


            $table->string('title');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->float('prov_persons')->nullable();
            $table->float('prov_days')->nullable();
            $table->float('prov_rooms')->nullable();
            $table->string('prov_route_map')->nullable();   //start_point, night_stays & sight-seeings, end_point 

            $table->bigInteger('user_id')->nullable();
            $table->boolean('status')->default(true);
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('trips');
    }
}
