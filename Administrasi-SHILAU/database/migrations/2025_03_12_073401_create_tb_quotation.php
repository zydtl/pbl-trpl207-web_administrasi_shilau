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
        Schema::create('tb_quotation', function (Blueprint $table) {
            $table->integer("id_quotation", true);
            $table->integer("id_project");
            $table->string("no_quotation")->unique();
            $table->date("tanggal");
            $table->string("kepada");
            $table->string("isi_quotation");
            $table->integer("ttd");
            $table->timestamps();
            $table->foreign("id_project")->references("id_project")->on("tb_project");
            $table->foreign("ttd")->references("id_ttd")->on("tb_signatures");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_quotation');
    }
};
