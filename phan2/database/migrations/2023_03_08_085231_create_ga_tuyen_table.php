<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaTuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ga_tuyen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ga_id');
            $table->unsignedBigInteger('tuyen_id');
            $table->integer('ThuTu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ga_tuyen');
    }
}
