<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjambaranggurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjambaranggurus', function (Blueprint $table) {
            $table->id();
            $table->string('namabarangg2');
            $table->text('deskripsii2');
            $table->integer('stokk2');
            $table->string('pinjam2');
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
        Schema::dropIfExists('pinjambaranggurus');
    }
}
