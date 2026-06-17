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
        Schema::table('booking', function (Blueprint $table) {
            // Add unsignedBigInteger columns for foreign keys
            $table->unsignedBigInteger('roomspa_id')->after('status')->nullable();
            $table->unsignedBigInteger('branch_id')->after('roomspa_id')->nullable();

            // Add foreign key constraints
            $table->foreign('roomspa_id')->references('id')->on('roomspa')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking', function (Blueprint $table) {
            // Drop foreign key constraints first
            $table->dropForeign(['roomspa_id']);
            $table->dropForeign(['branch_id']);

            // Drop the columns
            $table->dropColumn('roomspa_id');
            $table->dropColumn('branch_id');
        });
    }
};
