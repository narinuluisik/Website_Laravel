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
        Schema::table('about_contents', function (Blueprint $table) {
           $table->string('title')->nullable()->after('id');
            $table->text('vision')->nullable()->after('content');
            $table->text('mission')->nullable()->after('vision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_contents', function (Blueprint $table) {
            Schema::table('about_contents', function (Blueprint $table) {
            $table->dropColumn(['title', 'vision', 'mission']);
        });
        });
    }
};
