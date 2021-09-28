<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pt');
            $table->string('alamat');
            $table->string('kota');
            $table->string('email');
            $table->bigInteger('no_telp');
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
        Schema::dropIfExists('perusahaan');
    }
}
