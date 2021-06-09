<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKompetensiSertifikasi extends Model
{
    use HasFactory;

    protected $table = "unit_kompetensi_sertifikasi";

    protected $fillable = [
        'is_aktif',

        'id_ref_jenis_sertifikasi',
        'id_ref_kompetensi',
    ];
    public function RefJenisSertifikasi(){
        return $this->hasMany(RefJenisSertifikasi::class, 'id_ref_jenis_sertifikasi', 'id');
    }
    

    public function RefUnitKompetensi(){
        return $this->hasMany(RefUnitKompetensi::class, 'id_ref_kompetensi', 'id');
    }
}
