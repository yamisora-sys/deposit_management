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
        Schema::create('sotietkiem', function (Blueprint $table) {
            $table->id();
            $table->json('loaikyhan');
            $table->bigInt('user_id')->unsigned();
            $table->timestamps();
            $table->datetime('ngaydaohan');
            $table->integer('sotiengui');
            $table->integer('sodu');
            $table->integer('tienlai')->default(0);
            $table->datetime('ngaydongso')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sotietkiem');
    }
};