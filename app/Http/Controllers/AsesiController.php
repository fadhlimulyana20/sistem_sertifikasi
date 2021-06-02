<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AsesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesi = Asesi::all();

        return view('pages.asesi.index', [
            'asesi' => $asesi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->leftJoin('asesi', 'users.id', '=', 'asesi.id_user')->select('users.*')->whereNull('asesi.id_user')->get();

        return view('pages.asesi.create', [
            'user' => $user
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
            'nim' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kualifikasi_pendidikan' => 'required',
            'id_user' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $asesi = new Asesi;
        $asesi->nim = $request->input('nim');
        $asesi->nik = $request->input('nik');
        $asesi->tempat_lahir = $request->input('tempat_lahir');
        $asesi->tanggal_lahir = $request->input('tanggal_lahir');
        $asesi->alamat = $request->input('alamat');
        $asesi->no_telepon = $request->input('no_telepon');
        $asesi->kualifikasi_pendidikan = $request->input('kualifikasi_pendidikan');
        $asesi->id_user = $request->input('id_user');
        $asesi->jenis_kelamin = $request->input('jenis_kelamin');
        $asesi->save();

        return redirect(route('asesi.index'));
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
        $asesi = Asesi::find($id);
        $user = User::all();

        return view('pages.asesi.edit', [
            'asesi' => $asesi,
            'user' => $user
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
            'nim' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kualifikasi_pendidikan' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $asesi = Asesi::find($id);
        $asesi->nim = $request->input('nim');
        $asesi->nik = $request->input('nik');
        $asesi->tempat_lahir = $request->input('tempat_lahir');
        $asesi->tanggal_lahir = $request->input('tanggal_lahir');
        $asesi->alamat = $request->input('alamat');
        $asesi->no_telepon = $request->input('no_telepon');
        $asesi->kualifikasi_pendidikan = $request->input('kualifikasi_pendidikan');
        $asesi->jenis_kelamin = $request->input('jenis_kelamin');
        $asesi->save();

        return redirect(route('asesi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesi = Asesi::find($id);
        $asesi->delete();

        return redirect(route('asesi.index'));
    }
}
