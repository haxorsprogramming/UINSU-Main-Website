<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUnitKampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_unit_kampus', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_unit', 10);
            $table -> char('nama_unit', 200);
            $table -> char('deksripsi_unit', 200);
            $table -> char('prefix', 1);
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
        Schema::dropIfExists('tbl_unit_kampus');
    }
}
