<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasukadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masukadmins', function (Blueprint $table) {
            $table->id();
            $table->string('kategori11');
            $table->string('namabarang11');
            $table->string('merek11');
            $table->integer('stok11');
            $table->string('satuan11');
            $table->text('deskripsi11');
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
        Schema::dropIfExists('masukadmins');
    }
}
