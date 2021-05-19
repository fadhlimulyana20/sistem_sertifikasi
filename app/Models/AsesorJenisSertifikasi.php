<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesorJenisSertifikasi extends Model
{
    use HasFactory;

    protected $table = 'asesor_jenis_sertifikasi';

    protected $fillable = {
        'tanggal_awal_berlaku',
        'tanggal_akhir_berlaku',
        'no_sertifikat',
    }
}
