<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->string('resolusi_layar');
            $table->string('vga');
            $table->string('ukuran_kartu vga');
            $table->string('tipe layar');
            $table->string('optical_drive');
            $table->string('harga');
            $table->string('deskripsi');
            $table->string('diskon');
            $table->string('thumbnail');
            $table->string('keyboard');
            $table->string('card_reader');
            $table->string('web_cam');
            $table->string('networking');
            $table->string('audio');
            $table->string('battery');
            $table->string('vr');
            $table->string('garansi');
            $table->string('stock');
            $table->string('keadaan');
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
        Schema::dropIfExists('produk_details');
    }
}
