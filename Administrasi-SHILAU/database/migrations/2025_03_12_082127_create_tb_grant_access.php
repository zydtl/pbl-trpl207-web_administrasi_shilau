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
        Schema::create('tb_grant_access', function (Blueprint $table) {
            $table->integer("id_grant_access", true);
            $table->integer("id_role");
            $table->integer("id_menu_access");
            $table->boolean("create");
            $table->boolean("read");
            $table->boolean("update");
            $table->boolean("delete");
            $table->enum('coxPrivillage', ['only','nothing','all']);
            $table->enum('jurusanPrivillage', ['only','nothing','all']);
            $table->timestamps();
            $table->foreign("id_menu_access")->references("id_menu_access")->on("tb_menu_access");
            $table->foreign("id_role")->references("id_role")->on("tb_roles");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_grant_access');
    }
};
