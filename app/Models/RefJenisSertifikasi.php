<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJenisSertifikasi extends Model
{
    use HasFactory;

    protected $table = "ref_jenis_sertifikasi";

    protected $fillable = [
        'nama',
        'keterangan',
        'status_jenis_sertifikasi',
        'is_aktif'
    ];

    public function unitKompetensi(){
        return $this->hasMany(UnitKompetensiSertifikasi::class, 'id_ref_jenis_sertifikasi', 'id');
    }

    // public function syarat(){
    //     return $this->hasMany(SyaratSertifikasi::class, 'id_ref_jenis_sertifikasi');
    // }
    // public function asesorJenisSertifikai(){
    //     return $this->hasMany(AsesorJenisSertifikai::class);
    // }
}
