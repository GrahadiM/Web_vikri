<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHKIHakCiptasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_k_i_hak_ciptas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('pkm');
            $table->string('tahun');
            $table->string('ket');
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
        Schema::dropIfExists('h_k_i_hak_ciptas');
    }
}
