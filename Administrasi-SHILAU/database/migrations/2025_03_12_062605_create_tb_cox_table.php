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
        Schema::create('tb_cox', function (Blueprint $table) {
            $table->integer("id_cox", true);
            $table->integer("id_jurusan");
            $table->string("CoX");
            $table->timestamps();
            $table->foreign("id_jurusan")->references("id_jurusan")->on("tb_jurusan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cox');
    }
};
