<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKuesioner extends Model
{
    use HasFactory;

    protected $table = "ref_kuesioner";

    protected $fillable = [
        'pertanyaan',
        'is_aktif',
    ];
}
