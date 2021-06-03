<?php

namespace App\Http\Controllers;

use App\Models\InstrumenAsesmenKompetensi;
use App\Models\RefUnitKompetensi;
use Illuminate\Http\Request;

class InstrumenAsesmenKompetensiController extends Controller
{
    /**
     * Menampilkan seluruh Instrumen Kompetensi Asesmen
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_ref_unit_kompetensi)
    {
        $unitKompetensi = InstrumenAsesmenKompetensi::find($id_ref_unit_kompetensi);

        if (!isset($id_ref_unit_kompetensi)) {
            return abort(404);
        }

        return view('pages.ref_unit_kompetensi.index', [
            'nama' => $unitKompetensi,
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
