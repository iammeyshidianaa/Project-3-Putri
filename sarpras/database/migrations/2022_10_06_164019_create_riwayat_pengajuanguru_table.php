<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPengajuanguruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pengajuanguru', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang5');
            $table->integer('harga2');
            $table->date('jumlah2');
            $table->date('total2');
            $table->string('status2');
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
        Schema::dropIfExists('riwayat_pengajuanguru');
    }
}
