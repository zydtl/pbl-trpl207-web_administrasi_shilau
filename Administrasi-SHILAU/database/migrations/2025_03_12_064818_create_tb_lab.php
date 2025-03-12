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
        Schema::create('tb_lab', function (Blueprint $table) {
            $table->integer('id_lab', true); // Primary key dengan auto-increment
            $table->string('lab');
            $table->string('gedung');
            $table->string('ruangan');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_lab');
    }
};
