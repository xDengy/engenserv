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
        Schema::create('about_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('text');
            $table->string('link')->nullable();
            $table->string('link_text')->nullable();
            $table->char('use_advantages')->nullable();
            $table->integer('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_blocks');
    }
};
