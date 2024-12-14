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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username', 225);
            $table->string('password', 225);
            $table->string('status', 10)->default('active');
            $table->string('credit', 500)->default('0');
            $table->string('frpcredit', 11)->default('0');
            $table->string('sckey', 30)->default(Str::random(30));
            $table->string('regBy', 200)->default('system');
            $table->string('email', 200);
            $table->bigInteger('telegram_chat_id')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
