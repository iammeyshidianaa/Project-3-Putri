<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuangrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuangr', function (Blueprint $table) {
            $table->id();
            $table->string('namap');
            $table->string('barangp');
            $table->string('alasanp');
            $table->bigInteger('hargap');
            $table->integer('jumlahp');
            $table->bigInteger('totalp');
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
        Schema::dropIfExists('pengajuangr');
    }
}
