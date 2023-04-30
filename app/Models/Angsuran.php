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
        'tanggal_jatuh_tempo',
        'nominal'
    ];
    protected $attributes = [
        'keterangan' => 'belum lunas',
    ];

    public function mitra():BelongsTo{
        return $this->belongsTo(Mitra::class);
    }

}
