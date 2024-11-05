<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_charges', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id');
            $table->bigInteger('location_id')->nullable();
            $table->string('type');     // BtoB, BtoC

            $table->string('title')->nullable();    // sight-seeing, NJP to Charkhole, 4 Bed room, 1 plate momo, Burbeeque
            $table->string('desc')->nullable();     // within 20km, any distance,             

            $table->float('rate_per_unit');
            $table->float('rate_per_half_unit')->nullable();

            $table->string('unit')->nullable();
            $table->string('unit_desc')->nullable();    // capacity: 4 Persons in a room, 7 seater car, 8 pieces of momo:Plate 
            // $table->string('rate_per_unit');

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
        Schema::dropIfExists('service_charges');
    }
}
