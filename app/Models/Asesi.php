<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesi extends Model
{
    use HasFactory;

    protected $table = "asesi";

    protected $fillable = [
        'nim',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'email',
        'kualifikasi_pendidikan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
