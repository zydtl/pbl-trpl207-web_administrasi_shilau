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
        Schema::create('tb_signatures', function (Blueprint $table) {
            $table->integer("id_ttd", true);
            $table->string("nama");
            $table->bigInteger("nip");
            $table->string("jabatan");
            $table->string("image_ttd");
            $table->string("image_stamp");
            $table->string("deskripsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_signatures');
    }
};
