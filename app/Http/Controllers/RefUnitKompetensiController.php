<?php

namespace App\Http\Controllers;

use App\Models\RefUnitKompetensi;
use Illuminate\Http\Request;

class RefUnitKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref_unit_kompetensi = RefUnitKompetensi::all();

        return view('pages.ref_unit_kompetensi.index', [
            'ref_unit_kompetensi' => $ref_unit_kompetensi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ref_unit_kompetensi.create');
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
        ]);

        $ref_unit_kompetensi = new RefUnitKompetensi;
        $ref_unit_kompetensi->nama = $request->input('nama');
        $ref_unit_kompetensi->is_aktif = true;

        $ref_unit_kompetensi->save();

        return redirect(route('ref_unit_kompetensi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ref_unit_kompetensi = RefUnitKompetensi::find($id);

        return view('pages.ref_unit_kompetensi.detail', [
            'ref_unit_kompetensi' => $ref_unit_kompetensi
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
        $ref_unit_kompetensi = RefUnitKompetensi::find($id);
        return view('pages.ref_unit_kompetensi.edit', [
            'ref_unit_kompetensi' => $ref_unit_kompetensi
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
            'nama' => 'required',
        ]);

        $ref_unit_kompetensi = RefUnitKompetensi::find($id);
        $ref_unit_kompetensi->nama = $request->input('nama');
        $ref_unit_kompetensi->is_aktif = true;

        $ref_unit_kompetensi->save();

        return redirect(route('ref_unit_kompetensi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref_unit_kompetensi = RefUnitKompetensi::find($id);
        $ref_unit_kompetensi->delete();

        return redirect(route('ref_unit_kompetensi.index'));
    }
}
