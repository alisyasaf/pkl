<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $fillable=[
        'bukti_bayar',
        'nominal_bayar',
        'tanggal_bayar',
        'mitra_id',
        'angsuran_id'
    ];

    public function mitra(){
        return $this->belongsTo(Mitra::class);
    }
    public function angsuran(){
        return $this->belongsTo(Angsuran::class);
    }
}
