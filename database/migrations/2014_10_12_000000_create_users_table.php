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
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('tbl_hotel_infos');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('tbl_user_roles');
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('tbl_departments');
            $table->boolean('isCreated')->default(0);
            $table->boolean('isModify')->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_work');
            $table->text('description')->nullable();
            $table->text('address');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('tbl_city');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('tbl_country');
            $table->integer('zip');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
