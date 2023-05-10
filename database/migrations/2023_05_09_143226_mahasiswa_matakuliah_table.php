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
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id')->nullable();            
            $table->unsignedBigInteger('matakuliah_kode')->nullable();
            $table->string('nilai')->nullable();
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('matakuliah_kode')->references('kode')->on('matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_matakuliah', function (Blueprint $table){
            $table->string('mahasiswa');
            $table->dropForeign(['mahasiswa_id']);
            $table->string('matakuliah');
            $table->dropForeign(['matakuliah_kode']);
        });
    }
};
