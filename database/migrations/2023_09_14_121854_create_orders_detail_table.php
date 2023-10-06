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
        Schema::create('orders_detail', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id");
            $table->double("per_price");
            $table->integer("qty");
            $table->string("sub_total");
            $table->string("name");
            $table->string("surname");
            $table->string("adress");
            $table->string("city");
            $table->string("urun_adı");
            $table->integer("user_id");
            $table->integer("phone");
            $table->string("email");
            $table->string("ordernote")->default("");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_detail');
    }
};
