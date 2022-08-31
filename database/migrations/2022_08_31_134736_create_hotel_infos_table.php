<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hotel_infos', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->text('hotel_address');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('tbl_city');
            $table->integer('zip');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('tbl_country');
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('url')->nullable();
            $table->string('path')->nullable();
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
        Schema::dropIfExists('hotel_infos');
    }
}
