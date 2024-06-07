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
        Schema::create('project_tecnology', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tecnology_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('tecnology_id')->references('id')->on('tecnologies')->onDelete('set null');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tecnology');
    }
};
