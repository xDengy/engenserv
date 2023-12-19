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
        Schema::create('order_catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('catalog_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');
            $table->foreign('catalog_id')
                ->references('id')->on('catalogs')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_catalogs');
    }
};
