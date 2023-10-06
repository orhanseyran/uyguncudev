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
        Schema::create('urunler', function (Blueprint $table) {
            $table->id();
            $table->string("baslik");
            $table->string("aciklama");
            $table->string("resim");
            $table->string("kategori");
            $table->string("fiyat");
            $table->string("meta");
            $table->string("meta_aciklama");
            $table->integer("user_id");
            $table->boolean('active')->default(true);
            $table->string("username");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
