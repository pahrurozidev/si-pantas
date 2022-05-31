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
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('telepon')->unique();
            $table->string('email')->unique();
            $table->date('tgl_lahir');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('jmlh_bantuan')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('desa')->default(false);
            $table->boolean('warga')->default(true);
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
