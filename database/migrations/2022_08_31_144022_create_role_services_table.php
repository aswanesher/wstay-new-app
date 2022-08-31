<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_role_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('tbl_roles');
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('tbl_hotel_infos');
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('tbl_services');
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
        Schema::dropIfExists('role_services');
    }
}
