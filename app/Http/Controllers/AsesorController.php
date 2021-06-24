<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\User;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesor = Asesor::all();

        return view('pages.asesor.index', [
            'asesor' => $asesor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('pages.asesor.create', [
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
            'nama' => 'required',
        ]);

        $asesor = new Asesor;
        $asesor->id_user = $request->input('id_user');
        $asesor->nama = $request->input('nama');

        $asesor->save();

        return redirect(route('asesor.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asesor = Asesor::find($id);

        return view('pages.asesor.detail', [
            'asesor' => $asesor
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
        $asesor = Asesor::find($id);
        $user = User::all();
        return view('pages.asesor.edit', [
            'asesor' => $asesor,
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
            'nama' => 'required',
        ]);

        $asesor = Asesor::find($id);
        $asesor->id_user = $request->input('id_user');
        $asesor->nama = $request->input('nama');

        $asesor->save();

        return redirect(route('asesor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesor = Asesor::find($id);
        $asesor->delete();

        return redirect(route('asesor.index'));
    }
}
