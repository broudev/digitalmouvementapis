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
        Schema::create('feeds_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('author_id');
            $table->longText('contents');
            $table->string('feed_illustration_url');
            $table->bigInteger('counters');
            $table->bigInteger('comments_counters');
            $table->string('slug', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feeds_models');
    }
};
