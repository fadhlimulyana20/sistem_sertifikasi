@extends('layouts.admin-master')

@section('title', 'Menambahkan Jadwal')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Menambahkan Jadwal</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="bg-white p-3 rounded">
                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="kegiatan">Kegiatan</label>
                            <select class="form-control" id="kegiatan" name="kegiatan">
                                <option selected>Open this select menu</option>
                                @foreach ($kegiatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kegiatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="penawaran_sertifikasi">Penawaran Sertifikasi</label>
                            <select class="form-control" id="penawaran_sertifikasi" name="penawaran_sertifikasi">
                                <option selected>Open this select menu</option>
                                @foreach ($penawaran_sertifikasi as $item)
                                    <option value="{{ $item->jenisSertifikasi->nama }}">{{ $item->jenisSertifikasi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tanggal_awal">Tanggal Awal</label>
                            <input class="form-control" type="date" name="tanggal_awal" id="tanggal_awal" placeholder="Tanggal Awal"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tanggal_akhir">Tanggal Akhir</label>
                            <input class="form-control" type="date" name="tanggal_akhir" id="tanggal_akhir"
                                placeholder="Tanggal Akhir" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="is_show" value="" id="is_show">
                            <label class="form-check-label" for="is_show">
                                Tampilkan?
                            </label>
                        </div>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
