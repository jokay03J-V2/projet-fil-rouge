<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('category_number', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->string('name');
        });

        Schema::create('emergency_number', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->string('name', 255);
            $table->string('content');
            $table->string('hourly');
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('category_number');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_number');
        Schema::dropIfExists('category_number');
    }
};
