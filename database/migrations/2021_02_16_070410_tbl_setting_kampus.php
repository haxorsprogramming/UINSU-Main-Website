<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSettingKampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_setting_kampus', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_setting', 100);
            $table -> char('nama_setting', 200);
            $table -> text('deksripsi_setting');
            $table -> char('nilai', 220);
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_setting_kampus');
    }
}
