<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTetapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_tetaps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); //Dosen 
            $table->string('pps')->nullable(); //Pendidikan Pasca Sarjana
            $table->string('bk')->nullable(); //Bidang Keahlian
            $table->string('ja')->nullable(); //Jabatan Akademik
            $table->string('spp')->nullable(); //Sertifikat Pendidik Profesional
            $table->string('skpi')->nullable(); //Sertifikat Kompetensi Profesi Industri
            $table->string('mk')->nullable(); //Mata kuliah yang mampu diampu
            $table->string('kmk')->nullable(); //Kesesuaian Mata Kuliah dengan bidang keahlian yang diampu
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
        Schema::dropIfExists('dosen_tetaps');
    }
}
