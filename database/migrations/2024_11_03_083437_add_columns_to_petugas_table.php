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
        Schema::table('petugas', function (Blueprint $table) {
            if (!Schema::hasColumn('petugas', 'name')) {
                $table->string('name')->after('id'); // Menambahkan kolom name jika belum ada
            }
            if (!Schema::hasColumn('petugas', 'email')) {
                $table->string('email')->unique()->after('name'); // Menambahkan kolom email jika belum ada
            }
            if (!Schema::hasColumn('petugas', 'password')) {
                $table->string('password')->after('email'); // Menambahkan kolom password jika belum ada
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('petugas', function (Blueprint $table) {
            if (Schema::hasColumn('petugas', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('petugas', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('petugas', 'password')) {
                $table->dropColumn('password');
            }
        });
    }
};
