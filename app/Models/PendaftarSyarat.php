<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarSyarat extends Model
{
    use HasFactory;

    protected $table = "pendaftar_syarat";

    protected $fillable = [
        'status_verifikasi_syarat',
        'path_bukti',
        'verifikasi_asesor',
        'komentar_asesor',
        'id_syarat_sertifikasi',
        'id_pendaftar'
    ];
}
