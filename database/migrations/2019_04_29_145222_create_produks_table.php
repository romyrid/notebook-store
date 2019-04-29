<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps('merk');
            $table->string('seri');
            $table->string('berat');
            $table->string('ukuran_layar');
            $table->string('prosesor');
            $table->string('ram');
            $table->string('hardisk');
            $table->string('ssd');
            $table->string('warna');
            $table->string('os');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
