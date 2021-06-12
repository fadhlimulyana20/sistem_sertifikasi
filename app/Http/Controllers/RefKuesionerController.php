<?php

namespace App\Http\Controllers;

use App\Models\RefKuesioner;
use Illuminate\Http\Request;

class RefKuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref_kuesioner = RefKuesioner::all();

        return view('pages.ref_kuesioner.index', [
            'ref_kuesioner' => $ref_kuesioner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ref_kuesioner.create');
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
            'pertanyaan' => 'required',
        ]);

        $ref_kuesioner = new RefKuesioner;
        $ref_kuesioner->pertanyaan = $request->input('pertanyaan');
        //checkbox is_aktif belum berfungsi
        $ref_kuesioner->is_aktif = true;

        $ref_kuesioner->save();

        return redirect(route('ref_kuesioner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ref_kuesioner = RefKuesioner::find($id);

        return view('pages.ref_kuesioner.detail', [
            'ref_kuesioner' => $ref_kuesioner
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
        $ref_kuesioner = RefKuesioner::find($id);

        return view('pages.ref_kuesioner.edit', [
            'ref_kuesioner' => $ref_kuesioner,
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
            'pertanyaan' => 'required',
        ]);

        $ref_kuesioner = RefKuesioner::find($id);
        $ref_kuesioner->pertanyaan = $request->input('pertanyaan');
        $ref_kuesioner->is_aktif= true;
        //checkbox is_aktif belum berfungsi
        $ref_kuesioner->save();

        return redirect(route('ref_kuesioner.index'))->with('status', 'Berhasil memperbarui Kuesioner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref_kuesioner = RefKuesioner::find($id);
        $ref_kuesioner->delete();

        return redirect(route('ref_kuesioner.index'))->with('status', 'Berhasil menghapus' .$ref_kuesioner->pertanyaan);
    }
}
