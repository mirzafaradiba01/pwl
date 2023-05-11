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
        Schema::create('mahasiswa_matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id')->nullable();            
            $table->unsignedBigInteger('mhs_matakuliah_id')->nullable();
            $table->string('nilai')->nullable();
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('mhs_matakuliah_id')->references('id')->on('mhs_matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matakuliahs');
    }
};
