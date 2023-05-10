<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->string('kode', 10)->primary();
            $table->string('nama_mk', 100)->nullable();
            $table->integer('semester')->nullable();
            $table->string('dosen', 100)->nullable();
            $table->smallInteger('sks')->nullable();
            $table->smallInteger('jam')->nullable();
            $table->string('nilai',5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliah');
    }
};
