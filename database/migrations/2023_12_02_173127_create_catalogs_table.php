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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('url');
            $table->string('price')->nullable();
            $table->text('text')->nullable();
            $table->text('chars')->nullable();
            $table->text('scheme')->nullable();
            $table->char('new', 1);
            $table->string('title');
            $table->string('desc');
            $table->string('keywords');
            $table->string('h1');
            $table->char('is_folder', 1);
            $table->foreignId('folder_id')->nullable();
            $table->integer('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogs');
    }
};
