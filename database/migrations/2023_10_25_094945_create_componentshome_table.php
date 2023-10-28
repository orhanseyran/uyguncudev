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
        Schema::create('componentshome', function (Blueprint $table) {
            $table->id();
            $table->string('baslik')->nullable();
            $table->string('aciklama1')->nullable();
            $table->string('aciklama2')->nullable();
            $table->string('aciklama3')->nullable();
            $table->string('aciklama4')->nullable();
            $table->string('aciklama5')->nullable();
            $table->string('aciklama6')->nullable();
            $table->string('aciklama7')->nullable();
            $table->string('aciklama8')->nullable();
            $table->string('aciklama9')->nullable();
            $table->string('aciklama10')->nullable();
            $table->string('kategori')->nullable();
            $table->string('resim')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentshome');
    }
};
