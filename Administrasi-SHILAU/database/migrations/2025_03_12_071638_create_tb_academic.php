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
        Schema::create('tb_academic', function (Blueprint $table) {
            $table->integer("id_academic", true);
            $table->integer("id_project");
            $table->integer("id_dosen");
            $table->integer("jurusan");
            $table->integer("id_cox");
            $table->string("rpp");
            $table->text("mahasiswa");
            $table->timestamps();
            $table->foreign("id_project")->references("id_project")->on("tb_project");
            $table->foreign("id_dosen")->references("id_dosen")->on("tb_dosen");
            $table->foreign("jurusan")->references("id_jurusan")->on("tb_jurusan");
            $table->foreign("id_cox")->references("id_cox")->on("tb_cox");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_academic');
    }
};
