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
            $table->string('nama_barang1');
            $table->integer('stok1');
            $table->string('satuan1');
            $table->text('deskripsi1');
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
