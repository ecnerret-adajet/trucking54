<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haulers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();


            $table->string('name');
            $table->timestamp('dispatch_time');
            $table->timestamp('plant_in');
            $table->timestamp('plant_out');
            $table->timestamp('customer_in');
            $table->timestamp('customer_out');
            $table->timestamp('back_plant');
            
            $table->boolean('help')->default(0);
            $table->boolean('availability')->default(1);

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('haulers');
    }
}
