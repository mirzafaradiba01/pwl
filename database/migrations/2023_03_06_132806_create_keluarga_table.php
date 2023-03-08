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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->string('no',10)->primary();
            $table->string('nama',50)->nullable();
            $table->string('status',50)->nullable();
            $table->char('jk', 1)->default('P');
            $table->date('tgl_lahir')->nullable();
            $table->string('agama', 30)->nullable();
            $table->string('pekerjaan', 50)->nullable();
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
        Schema::dropIfExists('keluarga');
    }
};
