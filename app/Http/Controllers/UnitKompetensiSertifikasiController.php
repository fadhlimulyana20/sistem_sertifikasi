<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitKompetensiSertifikasiController extends Controller
{
    /**
     * Menampilkan unit kompetensi jenis sertifikasi
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_ref_jenis_sertifikasi)
    {
        $ref_jenis_sertifikasi = RefJenisSertifikasi::find($id_ref_jenis_sertifikasi);
        if(!isset($ref_jenis_sertifikasi)){
            return abort(404);
        }

        $unitKompetensi = $ref_jenis_sertifikasi -> unit_kompetensi;

        dd($ref_jenis_sertifikasi);

        return view('pages.ref_jenis_sertifikasi.unit_kompetensi.index', [
            'ref_jenis_sertifikasi' => $ref_jenis_sertifikasi,
            'unitKompetensi' => $unitKompetensi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
