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
        Schema::create('asad_data', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_year');
            $table->integer('product_code');
            $table->string('product_modal');
            $table->integer('product_price');
            $table->string('product_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asad_data');
    }
};
