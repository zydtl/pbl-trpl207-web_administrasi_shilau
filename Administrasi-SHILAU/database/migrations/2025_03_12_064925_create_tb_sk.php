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
        Schema::create('tb_sk', function (Blueprint $table) {
            $table->integer("id_sk", true);
            $table->integer("id_project");
            $table->string("no_sk")->unique();
            $table->string("nama_sk");
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
        Schema::dropIfExists('tb_sk');
    }
};
