<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangmasukadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangmasukadmins', function (Blueprint $table) {
            $table->id();
            $table->string('kategori22');
            $table->string('namabarang22');
            $table->string('merek22');
            $table->integer('stok22');
            $table->string('satuan22');
            $table->text('deskripsi22');
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
        Schema::dropIfExists('barangmasukadmins');
    }
}
