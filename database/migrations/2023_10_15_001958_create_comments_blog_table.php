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
        Schema::create('comments_blog', function (Blueprint $table) {
            $table->id();
            $table->string("ad");
            $table->string("yorum");
            $table->string("email");
            $table->integer("blog_id");
            $table->integer("reply_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_blog');
    }
};
