<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefUnitKompetensi extends Model
{
    use HasFactory;

    protected $table = "ref_unit_kompetensi";

    protected $fillable = [
        'nama',
        'is_aktif'
    ];
}
