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
        Schema::create('portfolyo', function (Blueprint $table) {
            $table->id();
            $table->string("baslik");
            $table->string("aciklama");
            $table->string("resim");
            $table->string("kategori");
            $table->string('meta')->default(null);
            $table->string('meta_aciklama')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolyo');
    }
};
