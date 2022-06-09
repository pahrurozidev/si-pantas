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
        Schema::create('penerimas', function (Blueprint $table) {
            $table->id();
            $table->string('status_desa')->nullable();
            $table->string('status_warga')->nullable();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('telepon')->unique();
            $table->string('email')->unique();
            $table->date('tgl_lahir');
            $table->string('jenis_bantuan');
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
        Schema::dropIfExists('penerimas');
    }
};
