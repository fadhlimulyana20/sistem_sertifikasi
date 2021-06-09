<?php

namespace App\Http\Controllers;

use App\Models\PenawaranSertifikasi;
use App\Models\RefJenisSertifikasi;
use App\Models\RefKegiatan;
use Illuminate\Http\Request;

class PenawaranSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::all();
        return view('pages.penawaran_sertifikasi.index', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_sertifikasi = RefJenisSertifikasi::all();
        $kegiatan = RefKegiatan::all();
        return view ('pages.penawaran_sertifikasi.create', [
            'jenis_sertifikasi' => $jenis_sertifikasi,
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
            'deskripsi_penawaran' => 'required',
            'periode' => 'required',
        ]);

        $penawaran_sertifikasi = new PenawaranSertifikasi;
        $penawaran_sertifikasi->deskripsi_penawaran = $request->input('deskripsi_penawaran');
        $penawaran_sertifikasi->periode = $request->input('periode');
        $penawaran_sertifikasi->is_active = true;

        $penawaran_sertifikasi->save();

        return redirect(route('penawaran_sertifikasi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);

        return view('pages.penawaran_sertifikasi.detail', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi
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
        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);
        $jenis_sertifikasi = RefJenisSertifikasi::all();
        $kegiatan = RefKegiatan::all();
        
        return view('pages.penawaran_sertifikasi.edit', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi,
            'jenis_sertifikasi' => $jenis_sertifikasi,
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
            'deskripsi_penawaran' => 'required',
            'periode' => 'required',
        ]);

        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);
        $penawaran_sertifikasi->deskripsi_penawaran = $request->input('deskripsi_penawaran');
        $penawaran_sertifikasi->periode = $request->input('periode');
        $penawaran_sertifikasi->is_active = true;

        $penawaran_sertifikasi->save();

        return redirect(route('penawaran_sertifikasi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);
        $penawaran_sertifikasi->delete();

        return redirect(route('penawaran_sertifikasi.index'));
    }
}
