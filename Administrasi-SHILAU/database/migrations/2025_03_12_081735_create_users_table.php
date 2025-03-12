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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user', true); // Primary key dengan auto-increment
            $table->string('email', 255)->unique();
            $table->string('username', 255);
            $table->string('password', 255);
            $table->integer('role_id');
            $table->integer('id_user_unit_kerjasama')->nullable();
            $table->integer('id_user_shilau')->nullable();
            $table->integer('id_user_jurusan')->nullable();
            $table->integer('id_user_dosen')->nullable();
            $table->timestamps();
            $table->foreign('role_id')->references('id_role')->on('tb_roles')->onDelete('cascade');
            $table->foreign('id_user_jurusan')->references('id_jurusan')->on('tb_jurusan')->onDelete('set null');
            $table->foreign('id_user_dosen')->references('id_dosen')->on('tb_dosen')->onDelete('set null');
        });

        
        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

        
        // Schema::create('sessions', function (Blueprint $table) {
        //     $table->string('id')->primary();
        //     $table->foreignId('user_id')->nullable()->index();
        //     $table->string('ip_address', 45)->nullable();
        //     $table->text('user_agent')->nullable();
        //     $table->longText('payload');
        //     $table->integer('last_activity')->index();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        // Schema::dropIfExists('password_reset_tokens');
        // Schema::dropIfExists('sessions');
    }
};
