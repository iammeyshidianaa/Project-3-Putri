<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangPinjamGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_pinjam_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang1');
            $table->integer('jumlahpinjam1');
            $table->date('tglpinjam1');
            $table->date('tglpengembalian1');
            $table->string('status1');
            $table->string('kembalikan1');
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
        Schema::dropIfExists('barang_pinjam_gurus');
    }
}
