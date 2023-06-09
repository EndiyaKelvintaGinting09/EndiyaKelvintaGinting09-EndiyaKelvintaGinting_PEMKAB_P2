<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->foreignId('id_pengaduan')
                ->references('id_pengaduan')
                ->on('pengaduan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->foreignId('id_petugas')
                ->references('id_petugas')
                ->on('petugas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tanggapan');
    }
}
