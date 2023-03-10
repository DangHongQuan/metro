<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatVeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_ve', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TuyenId');
            $table->string('DienThoai');
            $table->string('ThoiGianDat');
            $table->unsignedBigInteger('GaLenId');
            $table->unsignedBigInteger('GaXuongId');
            $table->integer('SoLuong');
            $table->double('ThanhTien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_ve');
    }
}
