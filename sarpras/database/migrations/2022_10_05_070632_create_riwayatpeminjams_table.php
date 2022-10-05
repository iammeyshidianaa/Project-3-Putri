<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatpeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatpeminjams', function (Blueprint $table) {
            $table->id();
            $table->string('namapeminjam');
            $table->string('namabarang');
            $table->integer('jumlahpinjam');
            $table->date('tglpinjam');
            $table->date('tglpengembalian');
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
        Schema::dropIfExists('riwayatpeminjams');
    }
}
