<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaranghabisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baranghabis', function (Blueprint $table) {
            $table->id();
            $table->string('kategori1');
            $table->string('nama_barang1');
            $table->string('merek1');
            $table->integer('stok1');
            $table->string('deskripsi1');
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
        Schema::dropIfExists('baranghabis');
    }
}
