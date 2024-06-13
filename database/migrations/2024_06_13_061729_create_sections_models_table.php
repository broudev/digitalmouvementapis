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
        Schema::create('sections_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('departement_id');
            $table->unsignedInteger('commune_id');
            $table->string('section_name', 100);
            $table->string('slug', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections_models');
    }
};
