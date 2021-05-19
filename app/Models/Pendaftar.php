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
}
