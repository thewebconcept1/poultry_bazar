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
        Schema::table('users', function (Blueprint $table) {
            $table->text('module_id')->nullable();
            $table->text('user_image')->nullable();
            $table->bigInteger('user_phone')->nullable();
            $table->integer('user_status')->default(0);
            $table->integer('user_verified')->default(0);
            $table->text('user_privileges')->nullable();
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
