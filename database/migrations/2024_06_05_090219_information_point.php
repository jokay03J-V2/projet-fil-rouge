<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

//        create table information_service
        Schema::create('information_service', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->string('name');
        });

//        create table information_point
        Schema::create('information_point', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->string('name');
            $table->string('hourly');
            $table->string("address");
            $table->string('postcode');
        });

//        create table information_service-information
        Schema::create('information_service-information', function (Blueprint $table) {
            $table->unsignedBigInteger("service_id");
            $table->foreign('service_id')->references('id')->on('information_service');
            $table->unsignedBigInteger("information_id");
            $table->foreign('information_id')->references('id')->on('information_point');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
