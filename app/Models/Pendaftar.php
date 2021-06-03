<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = "pendaftar";

    protected $fillable = [
        'status_akhir_sertifikasi',
        'tanggal_status_akhir',
        'status_pendaftaran'
    ];

    public function instrumen()
    {
        return $this->hasMany(PendaftarInstrumen::class, 'id_pendaftar', 'id');
    }

    public function asesi()
    {
        return $this->belongsTo(Asesi::class, 'id_asesi', 'id');
    }

    public function syarat() {
        return $this->hasMany(PendaftarSyarat::class, 'id_pendaftar', 'id');
    }
}
