<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigInteger('NIM',14)->unique()->index();
            $table->string('nama',100);
            $table->string('password',100);
            $table->string('email',100)->unique();
            $table->float('IPK')->nullable();
            $table->integer('jlh_sks')->nullable();
            $table->date('tgl_mulai_kul')->nullable();
            $table->date('tgl_selesai_kul')->nullable();
            $table->date('tgl_mulai_skripsi')->nullable();
            $table->date('tgl_selesai_skripsi')->nullable();
            $table->integer('toefl')->nullable();
            $table->string('judul_skripsi',200)->nullable();
            $table->string('doswal_nip',20)->nullable();
            $table->string('dosbing_nip',20)->nullable();
            $table->string('dospeng1_nip',20)->nullable();
            $table->string('dospeng2_nip',20)->nullable();
            $table->integer('no_hp')->nullable();
            $table->string('asal_sma',100)->nullable();
            $table->boolean('Setuju_doswal')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('mahasiswa');
    }
}
