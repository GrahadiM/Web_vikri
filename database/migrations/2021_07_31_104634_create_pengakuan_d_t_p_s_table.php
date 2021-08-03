<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengakuanDTPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengakuan_d_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('keahlian');
            $table->string('bukti');
            $table->string('tingkat');
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
        Schema::dropIfExists('pengakuan_d_t_p_s');
    }
}
