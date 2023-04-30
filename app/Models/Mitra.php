<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';

    protected $fillable=[
        'fullname',
        'nip',
        'jenis_usaha',
        'nama_usaha',
        'alamat',
        'alamat_usaha',
        'aset_awal',
        'nominal_pinjaman',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function angsuran(){
        return $this->hasMany(Angsuran::class);
    }
    public function pembayaran(){
        return $this->hasMany(Payment::class);
    }


}
