<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            
            $table->string('name');
            $table->string('phone');
            $table->string('operator');
            $table->string('avatar')->default('avatar\driver.jpg');
            $table->boolean('availability')->default(1);

            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('driver_truck', function (Blueprint $table) {
            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')
                  ->on('drivers')->onDelete('cascade');

            $table->integer('truck_id')->unsigned();
            $table->foreign('truck_id')->references('id')
                  ->on('trucks')->onDelete('cascade');

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
        Schema::dropIfExists('driver_truck');
        Schema::dropIfExists('drivers');
    }
}
