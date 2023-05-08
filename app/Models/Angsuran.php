<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Angsuran extends Model
{
    use HasFactory;

    protected $table = 'angsuran';
    protected $fillable = [
        'mitra_id',
        'angsuran_id',
        'tanggal_jatuh_tempo',
        'nominal',
        'keterangan'
    ];
    // protected $attributes = [
    // ];

    public function mitra(){
        return $this->belongsTo(Mitra::class);
    }

    public function angsuran(){
        return $this->belongsTo(Pembayaran::class);
    }

}
