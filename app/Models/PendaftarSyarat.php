<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarSyarat extends Model
{
    use HasFactory;

    protected $table = "pendaftar_syarat";

    protected $fillable = [
        'id_syarat_sertifikasi',
        'id_pendaftar'
    ];

    public function syarat_sertifikasi() {
        return $this->belongsTo(SyaratSertifikasi::class, 'id_syarat_sertifikasi', 'id');
    }

    public function pendaftar() {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
    }
}
