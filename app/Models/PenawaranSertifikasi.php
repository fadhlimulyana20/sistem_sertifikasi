<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenawaranSertifikasi extends Model
{
    use HasFactory;

    protected $table = "penawaran_sertifikasi";

    protected $fillable = [
        'deskripsi_penawaran',
        'periode',
        'is_active'
    ];

    public function jenisSertifikasi(){
        return $this->belongsTo(RefJenisSertifikasi::class, 'id_ref_jenis_sertifikasi');
    }

    public function jadwal() {
        return $this->hasMany(Jadwal::class, 'id_penawaran_sertifikasi');
    }
}
