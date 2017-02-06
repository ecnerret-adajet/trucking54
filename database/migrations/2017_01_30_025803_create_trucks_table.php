<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('plate_number');
            $table->string('operator');
            $table->string('vehicle_type');
            $table->string('capacity');
            $table->string('origin');
            $table->string('vendor_name');
            $table->string('type_goods');
            $table->boolean('availability')->default(1);


            $table->foreign('user_id')->references('id')
                    ->on('users')->onDelete('cascade');
            $table->timestamps();

            
        });

        Schema::create('hauler_truck', function (Blueprint $table) {
            $table->integer('hauler_id')->unsigned();
            $table->foreign('hauler_id')->references('id')
                  ->on('haulers')->onDelete('cascade');



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
        Schema::dropIfExists('hauler_truck');
        Schema::dropIfExists('trucks');
    }
}
