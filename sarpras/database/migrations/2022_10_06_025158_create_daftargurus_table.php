<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftargurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftargurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('barang');
            $table->string('alasan');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('total');
            $table->string('status');
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
        Schema::dropIfExists('daftargurus');
    }
}
