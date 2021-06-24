<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\PenawaranSertifikasi;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome()
    {
        $penawaran_sertifikasi = DB::table('penawaran_sertifikasi')
        ->join('ref_jenis_sertifikasi', 'penawaran_sertifikasi.id_ref_jenis_sertifikasi', '=', 'ref_jenis_sertifikasi.id')
        ->join('jadwal', 'penawaran_sertifikasi.id', '=', 'jadwal.id_penawaran_sertifikasi')
        ->join('ref_kegiatan', 'jadwal.id_kegiatan', '=', 'ref_kegiatan.id')
        ->select(DB::raw('penawaran_sertifikasi.*, ref_jenis_sertifikasi.nama as nama_sertifikasi, jadwal.tanggal_awal, jadwal.tanggal_akhir'))
        ->where('ref_kegiatan.nama_kegiatan', 'like', 'Pendaftaran%')
        ->whereDate('jadwal.tanggal_akhir', '>', Carbon::now())
        ->orderBy('tanggal_awal', 'asc')
        ->limit(4)
        ->get();
        return view('guest.welcome', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    public function penawaran()
    {
        $penawaran_sertifikasi = DB::table('penawaran_sertifikasi')
        ->join('ref_jenis_sertifikasi', 'penawaran_sertifikasi.id_ref_jenis_sertifikasi', '=', 'ref_jenis_sertifikasi.id')
        ->join('jadwal', 'penawaran_sertifikasi.id', '=', 'jadwal.id_penawaran_sertifikasi')
        ->join('ref_kegiatan', 'jadwal.id_kegiatan', '=', 'ref_kegiatan.id')
        ->select(DB::raw('penawaran_sertifikasi.*, ref_jenis_sertifikasi.nama as nama_sertifikasi, jadwal.tanggal_awal, jadwal.tanggal_akhir'))
        ->where('ref_kegiatan.nama_kegiatan', 'like', 'Pendaftaran%')
        ->whereDate('jadwal.tanggal_akhir', '>', Carbon::now())
        ->orderBy('tanggal_awal', 'asc')
        ->get();
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
