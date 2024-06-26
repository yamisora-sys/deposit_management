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
        Schema::create('tk_nganhang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('account_number')->unique();
            $table->float('balance', 30, 5)->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });

        DB::unprepared('
        CREATE TRIGGER BANK_ACC_CREATEE AFTER INSERT ON USERS 
        FOR EACH ROW BEGIN 
            declare acc_no varchar(255);
            declare uid bigint;
            set uid = NEW.id;
            select `phone` into acc_no from `users` where `id` = uid;
            insert into
                `tk_nganhang` (
                    user_id,
                    account_number,
                    created_at)
            values (uid,acc_no, now());
            end
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tk_nganhang');
    }
};
