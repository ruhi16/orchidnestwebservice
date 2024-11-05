<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceChargeBreakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_charge_breakings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_charge_id');
            $table->bigInteger('associate_id');

            $table->string('title')->nullable();
            $table->string('desc')->nullable();

            $table->float('rate_per_unit')->nullable();
            $table->float('rate_half_unit')->nullable();

            // $table->float('quantity')->nullable();
            // $table->float('total')->nullable();
            // $table->float('discount')->nullable();
            // $table->float('payable_total')->nullable();

            
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
        Schema::dropIfExists('service_charge_breakings');
    }
}
