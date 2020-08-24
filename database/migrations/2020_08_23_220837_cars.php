<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->index();
            $table->string('vehicle_brand');
            $table->string('vehicle_model');
            $table->integer('vehicle_year_manufacture');
            $table->string('vehicle_license_plate');
            $table->float('cart_capacity');
            $table->integer('cart_number_axles');
            $table->boolean('is_active')->default(1);
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
        Schema::drop('cars');
    }
}
