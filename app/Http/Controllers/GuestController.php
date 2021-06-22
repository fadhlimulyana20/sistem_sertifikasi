<?php

namespace App\Http\Controllers;

use App\Models\PenawaranSertifikasi;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome()
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        return view('guest.welcome', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    public function index()
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        return view('guest.penawaran', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    public function tentang()
    {
        return view('guest.tentang');
    }
}
