<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('trip_id')->nullable();
            $table->bigInteger('trip_service_id')->nullable();
            $table->bigInteger('trip_service_breaking_id')->nullable();

            $table->bigInteger('associate_id');
            $table->string('payment_particulars')->nullable();
            $table->enum('type',['payment_in', 'payment_out'])->default('payment_in');            
            $table->float('amount');
            $table->timestamp('payment_timestamp');

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
        Schema::dropIfExists('payments');
    }
}
