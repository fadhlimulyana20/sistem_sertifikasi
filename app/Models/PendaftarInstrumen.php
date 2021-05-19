<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarInstrumen extends Model
{
    use HasFactory;

    protected $table = 'pendaftar_instrumen';

    protected $fillable = [
        'jawaban_self_asesmen',
        'path_bukti',
        'komentar_bukti',
        'jawaban_asesor_verifikasi',
        'id_instrumen_asesmen',
        'id_pendaftar'
    ];
}
