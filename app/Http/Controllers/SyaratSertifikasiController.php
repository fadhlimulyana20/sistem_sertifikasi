<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefJenisSertifikasi;
use App\Models\SyaratSertifikasi;

class SyaratSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syarat_sertifikasi = SyaratSertifikasi::all();

        return view('pages.syarat_sertifikasi.index',[
            'syarat_sertifikasi' => $syarat_sertifikasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ref_jenis_sertifikasi = RefJenisSertifikasi::all();

        return view('pages.syarat_sertifikasi.create',[
            'ref_jenis_sertifikasi' => $ref_jenis_sertifikasi
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
            'syarat' => 'required',
            'ref_jenis_sertifikasi' => 'required',
        ]);

        $syarat_sertifikasi = new SyaratSertifikasi;
        $syarat_sertifikasi->syarat = $request->input('syarat');
        $syarat_sertifikasi->is_aktif= true;
        $syarat_sertifikasi-> id_ref_jenis_sertifikasi = $request -> input('ref_jenis_sertifikasi');

        $syarat_sertifikasi->save();

        return redirect(route('syarat_sertifikasi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syarat_sertifikasi = SyaratSertifikasi::find($id);
        $ref_jenis_sertifikasi = SyaratSertifikasi::all();

        return view('pages.syarat_sertifikasi.edit', [
            'syarat_sertifikasi' => $syarat_sertifikasi,
            'ref_jenis_sertifikasi' => $ref_jenis_sertifikasi,
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
            'syarat' => 'required',
            'ref_jenis_sertifikasi' => 'required',
        ]);

        $syarat_sertifikasi = SyaratSertifikasi :: find($id);

        $syarat_sertifikasi = new SyaratSertifikasi;
        $syarat_sertifikasi->syarat = $request->input('syarat');
        $syarat_sertifikasi->is_aktif= true;
        $syarat_sertifikasi-> id_ref_jenis_sertifikasi = $request -> input('ref_jenis_sertifikasi');

        $syarat_sertifikasi->save();

        return redirect(route('syarat_sertifikasi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $syarat_sertifikasi = SyaratSertifikasi :: find($id);

        $syarat_sertifikasi->delete();

        return redirect(route('syarat_sertifikasi.index'));
    }
}
