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
        Schema::create('bc_soluongso', function (Blueprint $table) {
            $table->id();
            $table->string('makyhan');
            $table->bigInteger('sl_somoi')->default(0);
            $table->bigInteger('sl_sodong')->default(0);
            $table->bigInteger('chenhlech')->nullable();
            $table->datetime('ngaytao');
            $table->foreign('makyhan')->references('makyhan')->on('kyhan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bc_soluongso');
    }
};
