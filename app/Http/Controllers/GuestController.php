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

    public function penawaran()
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        return view('guest.penawaran', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    public function show($id)
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);

        return view('guest.detail-penawaran', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    public function tentang()
    {
        return view('guest.tentang');
    }
}
