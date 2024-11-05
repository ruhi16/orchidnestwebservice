<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripDayServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_day_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('trip_day_id');
            $table->bigInteger('service_id')->nullable();
            $table->bigInteger('service_charge_id')->nullable();
            
            $table->float('actual_quantity')->nullable();                        
            $table->float('actual_total')->nullable();
            $table->float('actual_discount')->nullable();
            $table->float('actual_payable_total')->nullable();

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
        Schema::dropIfExists('trip_day_services');
    }
}
