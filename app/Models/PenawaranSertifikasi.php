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
}
