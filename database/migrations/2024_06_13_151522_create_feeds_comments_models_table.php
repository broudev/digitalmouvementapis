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
        Schema::create('feeds_comments_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('feed_id');
            $table->longText('comments');
            $table->string('slug', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feeds_comments_models');
    }
};
