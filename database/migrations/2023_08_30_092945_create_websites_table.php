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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('last_status_code')->nullable();
            $table->timestamp('last_checked_at')->nullable();
            $table->timestamp('last_ok_at')->nullable(); // Last time the website was OK
            $table->unsignedInteger('frequency')->default(5); // Frequency in minutes to check the website
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
