<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
    Schema::table('projects', function (Blueprint $table) {
        $table->string('github_link')->nullable();
        $table->string('live_link')->nullable();
        $table->json('tech_stack')->nullable(); // Disimpan sebagai array
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
};
