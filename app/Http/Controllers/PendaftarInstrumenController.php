<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarInstrumenController extends Controller
{
    /**
     * Menampilkan semua instrumen milik pendaftar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_pendaftar)
    {
        $pendaftar = Pendaftar::find($id_pendaftar);

        if (!isset($pendaftar)) {
            return abort(404);
        }

        $instrumen_asesmen = $pendaftar->instrumen;

        return view('pages.pendaftar.instrumen.index', [
            'pendaftar' => $pendaftar,
            'instrumen_asesmen' => $instrumen_asesmen
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
