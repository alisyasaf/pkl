<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('fullname');
            $table->string('nip')->unique();
            $table->string('jenis_usaha');
            $table->string('nama_usaha');
            $table->string('alamat');
            $table->string('alamat_usaha');
            $table->double('aset_awal');
            $table->double('nominal_pinjaman');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
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
        Schema::dropIfExists('mitra');
    }
};
