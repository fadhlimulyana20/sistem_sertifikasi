<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\PenawaranSertifikasi;
use App\Models\RefKegiatan;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();

        return view('pages.jadwal.index', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        $kegiatan = RefKegiatan::all();
        return view('pages.jadwal.create', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi,
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi' => 'required',
            'id_penawaran_sertifikasi' => 'required',
            'id_kegiatan' => 'required',
        ]);

        $jadwal = new Jadwal;
        $jadwal->tanggal_awal = $request->input('tanggal_awal');
        $jadwal->tanggal_akhir = $request->input('tanggal_akhir');
        $jadwal->deskripsi = $request->input('deskripsi');
        $jadwal->id_penawaran_sertifikasi= $request->input('id_penawaran_sertifikasi');
        $jadwal->id_kegiatan = $request->input('id_kegiatan');
        $jadwal->is_show = true;

        $jadwal->save();

        return redirect(route('jadwal.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);

        return view('pages.jadwal.detail', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        $kegiatan = RefKegiatan::all();
        return view('pages.jadwal.edit', [
            'jadwal' => $jadwal,
            'penawaran_sertifikasi' => $penawaran_sertifikasi,
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi' => 'required',
            'id_penawaran_sertifikasi' => 'required',
            'id_kegiatan' => 'required',
        ]);

        $jadwal = Jadwal::find($id);
        $jadwal->tanggal_awal = $request->input('tanggal_awal');
        $jadwal->tanggal_akhir = $request->input('tanggal_akhir');
        $jadwal->deskripsi = $request->input('deskripsi');
        $jadwal->id_penawaran_sertifikasi= $request->input('id_penawaran_sertifikasi');
        $jadwal->id_kegiatan = $request->input('id_kegiatan');
        $jadwal->is_show = true;

        $jadwal->save();

        return redirect(route('jadwal.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect(route('jadwal.index'));
    }
}
