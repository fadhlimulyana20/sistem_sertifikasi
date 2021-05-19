<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratSertifikasi extends Model
{
    use HasFactory;

    protected $table = "syarat_sertifikasi";

    protected $fillable = [
        'id_ref_jenis_sertifikasi',
        'syarat',
        'is_aktif'
    ]
}
