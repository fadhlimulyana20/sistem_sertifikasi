<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwal";

    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'is_show',
        'deskripsi'
    ];

    public function kegiatan() {
        return $this->belongsTo(RefKegiatan::class, 'id_kegiatan');
    }
}
