<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalianadmins', function (Blueprint $table) {
            $table->id();
            $table->string('namapeminjam1');
            $table->string('namabarang4');
            $table->integer('jumlah1');
            $table->string('tanggalpinjam1');
            $table->string('setujui1');
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
        Schema::dropIfExists('pengembalianadmins');
    }
}
