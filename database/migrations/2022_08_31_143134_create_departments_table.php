<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_departments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('tbl_hotel_infos');
            $table->string('department_code');
            $table->string('department_name');
            $table->text('description')->nullable();
            $table->double('price', 8, 2)->default(0);
            $table->string('unit')->nullable();
            $table->boolean('isEdit')->default(0);
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
        Schema::dropIfExists('departments');
    }
}
