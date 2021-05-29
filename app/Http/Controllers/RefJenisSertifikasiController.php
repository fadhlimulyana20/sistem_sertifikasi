<?php

namespace App\Http\Controllers;

use App\Models\RefJenisSertifikasi;
use Illuminate\Http\Request;

class RefJenisSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref_jenis_sertifikasi= RefJenisSertifikasi::all();
        return view('pages.ref_jenis_sertifikasi.index',[
            'ref_jenis_sertifikasi'=> $ref_jenis_sertifikasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ref_jenis_sertifikasi.create');
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
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $ref_jenis_sertifikasi = new RefJenisSertifikasi;
        $ref_jenis_sertifikasi->nama = $request->input('nama');
        $ref_jenis_sertifikasi->keterangan = $request->input('keterangan');
        $ref_jenis_sertifikasi->status_jenis_sertifikasi = $request->input('status_jenis_sertifikasi');
        $ref_jenis_sertifikasi->is_aktif= true;
        $ref_jenis_sertifikasi->save();

        return redirect(route('ref_jenis_sertifikasi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref_jenis_sertifikasi = RefJenisSertifikasi::find($id);
        $ref_jenis_sertifikasi->delete();
        return redirect(route('ref_jenis_sertifikasi.index'));
    }
}
