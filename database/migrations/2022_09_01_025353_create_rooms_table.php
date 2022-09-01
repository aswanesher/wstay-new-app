<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_no');
            $table->bigInteger('floor_id')->unsigned();
            $table->foreign('floor_id')->references('id')->on('tbl_floors');
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('tbl_hotel_infos');
            $table->bigInteger('room_type_id')->unsigned();
            $table->foreign('room_type_id')->references('id')->on('tbl_room_types');
            $table->boolean('isAllowSmoking')->default(0);
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
        Schema::dropIfExists('rooms');
    }
}
