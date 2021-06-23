@extends('layouts.admin-master')

@section('title', 'Menambahkan Penawaran Sertifikasi')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Menambahkan Penawaran Sertifikasi</h1>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="bg-white p-3 rounded">
                <form action="{{ route('penawaran_sertifikasi.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="jenis_sertifikasi">Jenis Sertifikasi</label>
                        <select class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi">
                            <option selected>Open this select menu</option>
                            @foreach ($jenis_sertifikasi as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="periode">Periode</label>
                        <input class="form-control" type="text" name="periode" id="periode"
                            placeholder="Periode" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_penawaran" class="form-label">Deskripsi Penawaran</label>
                        <textarea class="form-control" name="deskripsi_penawaran" id="deskripsi_penawaran" rows="5" required></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="is_active" value="" id="is_active">
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
