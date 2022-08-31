<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_permission_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('tbl_hotel_infos');
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
            $table->bigInteger('permission_id')->unsigned();
            $table->foreign('permission_id')->references('id')->on('permissions');
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
        Schema::dropIfExists('permission_services');
    }
}
