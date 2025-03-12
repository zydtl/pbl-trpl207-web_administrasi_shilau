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
        Schema::create('tb_pks', function (Blueprint $table) {
            $table->integer("id_pks", true);
            $table->integer("id_project");
            $table->string("no_pks")->unique();
            $table->string("nama_pks");
            $table->date("tanggal");
            $table->string("file");
            $table->timestamps();
            $table->foreign("id_project")->references("id_project")->on("tb_project");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pks');
    }
};
