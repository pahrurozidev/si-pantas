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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_bantuan')->unique()->nullable();
            $table->foreignId('penerima_bantuan')->unique()->nullable();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('telepon')->unique();
            $table->string('email')->unique();
            $table->date('tgl_lahir');
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('jmlh_bantuan')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_desa')->default(false);
            $table->boolean('is_warga')->default(true);
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
        });
    }
};
