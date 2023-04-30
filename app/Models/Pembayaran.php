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
        'bulan_bayar',
        'mitra_id'
    ];

    public function mitra(){
        return $this->hasOne(Mitra::class);
    }
}
