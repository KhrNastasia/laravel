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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('catalog_id');
            $table->string('price')->nullable();
            $table->text('fulldescription')->nullable();
            $table->text('description')->nullable();
            $table->string('articul')->nullable();
            $table->string('sale')->nullable();
            $table->string('sale_measure')->nullable();
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
