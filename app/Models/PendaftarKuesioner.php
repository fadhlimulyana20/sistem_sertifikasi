<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarKuesioner extends Model
{
    use HasFactory;

    protected $table = "pendaftar_kuesioner";

    protected $fillable = [
        'id_pendaftar',
        'id_kuesioner',
        'jawaban'
    ];
}
