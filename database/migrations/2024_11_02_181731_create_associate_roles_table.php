<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associate_roles', function (Blueprint $table) {
            $table->id();
            // $table->enum('status',['new', 'active', 'disabled'])->default('active');
            $table->enum('role',['guest', 'agent', 'admin', 'super_admin'])->default('guest');
            $table->string('particular')->nullable();
            $table->string('desc')->nullable();
            $table->string('slug')->nullable();

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
        Schema::dropIfExists('associate_roles');
    }
}
