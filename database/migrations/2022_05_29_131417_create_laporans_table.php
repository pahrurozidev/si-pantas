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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('question1');
            $table->string('question2');
            $table->string('question3');
            $table->string('jenis_bantuan');
            $table->string('jmlh_bantuan')->nullable();
            $table->string('deskripsi');
            $table->string('nama');
            $table->string('nik');
            $table->string('telepon');
            $table->string('email');
            $table->date('tgl_lahir');
            $table->string('username');
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
        Schema::dropIfExists('laporans');
    }
};
