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

        Schema::create('category_advice', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->string('name');
        });


        Schema::create('advice', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('category_advice');
            $table->string('name', 100);
            $table->string('content');
            $table->string('img');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advice');
        Schema::dropIfExists('category_advice');
    }
};
