<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamanadmins', function (Blueprint $table) {
            $table->id();
            $table->string('namapeminjam');
            $table->string('kelas');
            $table->string('namabarang3');
            $table->integer('jumlah');
            $table->date('tanggalpinjam');
            $table->date('tanggalkembali');
            $table->string('status3')->nullable();
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
        Schema::dropIfExists('peminjamanadmins');
    }
}
