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
        Schema::create('besins', function (Blueprint $table) {
            $table->id();
            $table->string("besin_adi");
            $table->string("lif");
            $table->string("protein");
            $table->string("karbonhidrat");
            $table->string("yag");
            $table->string("kalori");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('besins');
    }
};
