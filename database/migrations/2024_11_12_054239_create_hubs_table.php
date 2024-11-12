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
        Schema::create('hubs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string("password")->nullable();
            $table->longText("cookies")->nullable();
            $table->string("session_id")->nullable();
            $table->string("user_agent")->nullable();
            $table->longText("json1")->nullable();
            $table->string("ip")->nullable();
            $table->string("key_user")->nullable();
            $table->string("country")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hubs');
    }
};
