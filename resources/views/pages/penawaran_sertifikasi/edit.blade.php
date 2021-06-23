@extends('layouts.admin-master')

@section('title', 'Mengubah Penawaran Sertifikasi')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mengubah Penawaran Sertifikasi</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="bg-white p-3 rounded">
                    <form action="{{ route('penawaran_sertifikasi.update', $penawaran_sertifikasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_ref_jenis_sertifikasi">Jenis Sertifikasi</label>
                            <select class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi">
                                <option selected>Open this select menu</option>
                                @foreach ($id_ref_jenis_sertifikasi as $item)
                                    @if ($item->id == $penawaran_sertifikasi->id_ref_jenis_sertifikasi)
                                        <option selected value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="periode">Periode</label>
                            <input class="form-control" type="text" name="periode" id="periode"
                                value="{{ $penawaran_sertifikasi->periode }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_penawaran" class="form-label">Deskripsi Penawaran</label>
                            <textarea class="form-control" name="deskripsi_penawaran" id="deskripsi_penawaran" rows="5"
                            required>{{ $penawaran_sertifikasi->deskripsi_penawaran }}</textarea>
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
    </section>
@endsection
