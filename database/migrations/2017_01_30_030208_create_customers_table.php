<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('name');
            $table->string('city');
            $table->string('phone');
            $table->string('province');
            $table->string('address');
            $table->integer('total_hours')->unsigned();
            $table->boolean('availability')->default(0);

            $table->timestamps();
        });

        Schema::create('customer_hauler', function (Blueprint $table){
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')
                  ->on('customers')->onDelete('cascade');
            $table->integer('hauler_id')->unsigned();
            $table->foreign('hauler_id')->references('id')
                  ->on('haulers')->onDelete('cascade');
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
        Schema::dropIfExists('customer_hauler');
        Schema::dropIfExists('customers');
    }
}
