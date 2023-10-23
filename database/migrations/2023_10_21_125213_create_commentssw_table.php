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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urun_id');
            $table->double('puan');
            $table->string('urun');
            $table->string("yorum");
            $table->string("ad");
            $table->string("soyad");
            $table->string("email");
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->foreign('urun_id')->references('id')->on('urunler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
