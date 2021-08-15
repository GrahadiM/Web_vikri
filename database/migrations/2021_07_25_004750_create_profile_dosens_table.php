<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_dosen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); //Dosen 
            $table->string('total_mahasiswa')->nullable(); //Jumlah Mahasiswa yang Dibimbing
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
        Schema::dropIfExists('profile_dosen');
    }
}
