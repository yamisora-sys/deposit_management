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
            $table->string('makyhan');
            $table->json('thongtinkyhan')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->timestamps();
            $table->datetime('ngaymoso');
            $table->datetime('ngaydaohan')->nullable();
            $table->datetime('ngaycapnhat')->nullable();
            $table->float('sotiengui', 30, 5);
            $table->float('sodu', 30, 5)->default(0);
            $table->float('tienlai',30, 5)->default(0);
            $table->datetime('ngaydongso')->nullable()->default(null);
            // foreign key ma ky han
            $table->foreign('makyhan')->references('makyhan')->on('kyhan');
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
