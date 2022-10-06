<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDikembalikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dikembalikans', function (Blueprint $table) {
            $table->id();
            $table->string('namapeminjam2');
            $table->string('namabarang5');
            $table->integer('jumlah2');
            $table->string('tanggalpinjam2');
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
        Schema::dropIfExists('dikembalikans');
    }
}
