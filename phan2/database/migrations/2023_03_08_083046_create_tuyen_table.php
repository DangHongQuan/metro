<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyen', function (Blueprint $table) {
            $table->id();
            $table->string('MaTuyen');
            $table->string('TenTuyen');
            $table->string('ThoiGianHoatDong');
            $table->double('ChieuDai');
            $table->double('GiaVeToiThieu');
            $table->double('DonGiaGa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuyen');
    }
}
