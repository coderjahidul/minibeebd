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
        Schema::table('informations', function (Blueprint $table) {
            $table->string('messenger_link')->nullable();
            $table->boolean('phone_active')->default(1);
            $table->boolean('messenger_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->dropColumn(['messenger_link', 'phone_active', 'messenger_active']);
        });
    }
};
