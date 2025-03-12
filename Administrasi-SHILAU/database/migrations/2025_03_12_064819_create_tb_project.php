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
        Schema::create('tb_project', function (Blueprint $table) {
            $table->integer("id_project", true);
            $table->string("nama_project");
            $table->integer("mitra");
            $table->integer("lab");
            $table->text("deskripsi_project");
            $table->integer("model_kerjasama");
            $table->timestamps();
            $table->foreign("model_kerjasama")->references("id_model_kerjasama")->on("tb_model_kerjasama");
            $table->foreign("mitra")->references("id_mitra")->on("tb_mitra");
            $table->foreign("lab")->references("id_lab")->on("tb_lab");
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_project');
    }
};
