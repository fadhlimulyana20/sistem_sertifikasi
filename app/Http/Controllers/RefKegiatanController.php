<?php

namespace App\Http\Controllers;

use App\Models\RefKegiatan;
use Illuminate\Http\Request;

class RefKegiatanController extends Controller
{
    /**
     * Menampilkan Semua Referensi Kegiatan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref_kegiatan = RefKegiatan::all();

        return view('pages.ref_kegiatan.index',[
            'ref_kegiatan' => $ref_kegiatan
        ]);
    }

    /**
     * Menampilkan form untuk menambahkan data kegiatan untuk jadwal penawaran sertifikasi
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ref_kegiatan.create');
    }

    /**
     * Menyimpan data kegiatan melalui http request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|unique:ref_kegiatan,nama_kegiatan',
            'deskripsi' => 'required'
        ]);

        $ref_kegiatan = new RefKegiatan;
        $ref_kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $ref_kegiatan->deskripsi = $request->deskripsi;
        $ref_kegiatan->save();

        return redirect(route('ref_kegiatan.index'))->with('status', 'Berhasil menambahkan kegiatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kegiatan)
    {
        $ref_kegiatan = RefKegiatan::find($id_kegiatan);

        return view('pages.ref_kegiatan.detail', [
            'ref_kegiatan' => $ref_kegiatan
        ]);
    }

    /**
     * Menampilkan form untuk memperbarui data kegiatan untuk jadwal penawaran sertifikasi
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kegiatan)
    {
        $ref_kegiatan = RefKegiatan::find($id_kegiatan);

// page.penawaran_sertifikasi belum ditambahkan
        return view('pages.ref_kegiatan.edit', [
            'ref_kegiatan' => $ref_kegiatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required'
        ]);

        $ref_kegiatan = RefKegiatan::find($id_kegiatan);
        $ref_kegiatan->nama_kegiatan = $request->input('nama_kegiatan');
        $ref_kegiatan->deskripsi = $request->input('deskripsi');
        $ref_kegiatan->save();

        return redirect(route('ref_kegiatan.index'))->with('status', 'Berhasil memperbarui kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kegiatan)
    {
        $ref_kegiatan = RefKegiatan::find($id_kegiatan);
        $ref_kegiatan->delete();

        return redirect(route('ref_kegiatan.index'))->with('status', 'Berhasil menghapus'.$ref_kegiatan->nama_kegiatan);
    }

    // Function yang ada di lps-master dan belum digunakan di project ini

    // public function getAll() {
    //     $ref_kegiatan = RefKegiatan::all();
    //     return response($ref_kegiatan, 200);
    // }

    // public function add(Request $request) {
    //     $body = json_decode($request->getContent());

    //     $ref_kegiatan = new RefKegiatan;
    //     $ref_kegiatan->nama_kegiatan = $body->nama_kegiatan;
    //     $ref_kegiatan->deskripsi = $body->deskripsi;

    //     $ref_kegiatan->save();
    //     return response($ref_kegiatan, 200);
    // }

    // public function edit(Request $request, $id_kegiatan) {
    //     $body = json_decode($request->getContent());

    //     try {
    //         $ref_kegiatan = RefKegiatan::find($id_kegiatan);
    //     }catch(QueryException $ex) {
    //         $res = [
    //             'message' => 'Tidak ada Ref Kegiatan dengan id '.$id_kegiatan,
    //         ];

    //         return response()->json($res, 404);
    //     }

    //     // if (empty($ref_kegiatan)){
    //     // }

    //     $ref_kegiatan->nama_kegiatan = $body->nama_kegiatan;
    //     $ref_kegiatan->deskripsi = $body->deskripsi;

    //     $ref_kegiatan->save();
    //     return response($ref_kegiatan, 200);
    // }

    // public function delete($id_kegiatan) {
    //     try {
    //         $ref_kegiatan = RefKegiatan::find($id_kegiatan);
    //     }catch(QueryException $ex) {
    //         $response = [
    //             'message' => 'Tidak ada Ref Kegiatan dengan id '.$id_kegiatan
    //         ];

    //         return response()->json($response, 404);
    //     }

    //     $ref_kegiatan->delete();

    //     $res = [
    //         'message' => 'Ref Kegiatan dengan id '.$id_kegiatan.' berhasil dihapus',
    //         'id' => $id_kegiatan
    //     ];

    //     return response()->json($res, 200);
    // }
}



