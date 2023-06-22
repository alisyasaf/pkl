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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_bayar');
            $table->string('bukti_bayar');
            $table->string('nominal_bayar')->nullable();
            $table->unsignedBigInteger('mitra_id')->nullable();
            $table->foreign('mitra_id')->references('id')->on('mitra')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('angsuran_id');
            $table->foreign('angsuran_id')->references('id')->on('angsuran')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pembayaran');
    }
};
