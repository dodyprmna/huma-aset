<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanah', function (Blueprint $table) {
            $table->id();
            $table->integer('id_call_center');
            $table->string('nomor_asset');
            $table->string('nama_asset');
            $table->string('no_sertifikat');
            $table->longText('lokasi');
            $table->string('latitude');
            $table->string('lognitude');
            $table->double('luas_tanah');
            $table->year('tahun_perolehan');
            $table->double('nilai_perolehan');
            $table->year('tahun_pbb');
            $table->text('keterangan');
            $table->double('nilai_buku');
            $table->date('masa_berlaku_sertifikat');
            $table->boolean('status');
            $table->integer('created_by');
            $table->softDeletes();
            $table->boolean('status_file');
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
        Schema::dropIfExists('tanahs');
    }
}
