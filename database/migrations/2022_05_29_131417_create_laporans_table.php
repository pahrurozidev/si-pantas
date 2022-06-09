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
            $table->string('jenis_bantuan');
            $table->string('bentuk_bantuan');
            $table->string('jumlah1')->nullable();
            $table->string('jumlah2')->nullable();
            $table->string('deskripsi');
            $table->string('nama');
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->string('telepon');
            $table->string('username');
            $table->string('email');
            $table->string('jmlh_bantuan')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('tempat_lahir')->nullable();
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
