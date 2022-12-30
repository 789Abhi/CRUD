<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('Order_Reference')->nullable();
            $table->string('Order_Status')->nullable();
            $table->string('Branch')->nullable();
            $table->string('Hire_Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Post_Code')->nullable();
            $table->string('Country')->nullable();
            $table->string('Fleet')->nullable();
            $table->string('Hire_Start_Date')->nullable();
            $table->string('Estimated_Hire_End_Date')->nullable();
            $table->string('Monthly_Hire_Price')->nullable();
            $table->string('Payment_Period')->nullable();
            $table->string('On-cost')->nullable();
            $table->string('Off-Cost')->nullable();
            $table->string('Documents')->nullable();
            $table->string('General_Notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
