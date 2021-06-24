<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;

    protected $table = "asesor";

    protected $fillable = [
        'nama'
    ];

    public function asesorJenisSertifikasi()
    {
        return $this->hasMany(AsesorJenisSertifikasi::class, 'id_asesor');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
