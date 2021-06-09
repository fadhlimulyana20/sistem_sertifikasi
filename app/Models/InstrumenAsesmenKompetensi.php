<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstrumenAsesmenKompetensi extends Model
{
    use HasFactory/*, softDeletes*/;
    protected $table = 'instrumen_asesmen_kompetensi';

    protected $fillable= [
        'id_ref_unit_kompetensi',
        'instrumen_pertanyaan',
        'status_instrumen',
        'is_aktif',
    ];

    public function unitKompetensi(){
        return $this->belongsTo(RefUnitKompetensi::class, 'id_ref_unit_kompetensi');
    }
}
