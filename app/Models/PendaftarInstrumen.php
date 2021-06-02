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

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
    }

    public function instrumenAsesmen()
    {
        return $this->belongsTo(InstrumenAsesmenKompetensi::class, 'id_instrumen_asesmen', 'id');
    }
}
