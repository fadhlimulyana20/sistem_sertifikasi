<?php

namespace App\Http\Controllers;

use App\Models\PenawaranSertifikasi;
use App\Models\RefJenisSertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $jenis_sertifikasi = DB::table('ref_jenis_sertifikasi')->join('penawaran_sertifikasi', 'ref_jenis_sertifikasi.id', '=', 'penawaran_sertifikasi.id_ref_jenis_sertifikasi')
            ->select('ref_jenis_sertifikasi.*')->get();
        return view ('pages.penawaran_sertifikasi.create', [
            'jenis_sertifikasi' => $jenis_sertifikasi
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
            'id_ref_jenis_sertifikasi'=>'required',
            'periode' => 'required',
        ]);

        $penawaran_sertifikasi = new PenawaranSertifikasi;
        $penawaran_sertifikasi->deskripsi_penawaran = $request->input('deskripsi_penawaran');
        $penawaran_sertifikasi->periode = $request->input('periode');
        $penawaran_sertifikasi->id_ref_jenis_sertifikasi = $request->input('id_ref_jenis_sertifikasi');
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
        $id_ref_jenis_sertifikasi = RefJenisSertifikasi::all();

        return view('pages.penawaran_sertifikasi.edit', [
            'penawaran_sertifikasi' => $penawaran_sertifikasi,
            'id_ref_jenis_sertifikasi' => $id_ref_jenis_sertifikasi,
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
            'id_ref_jenis_sertifikasi'=>'required',
            'deskripsi_penawaran' => 'required',
            'periode' => 'required',
        ]);

        $penawaran_sertifikasi = PenawaranSertifikasi::find($id);
        $penawaran_sertifikasi->deskripsi_penawaran = $request->input('deskripsi_penawaran');
        $penawaran_sertifikasi->id_ref_jenis_sertifikasi = $request->input('id_ref_jenis_sertifikasi');
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
