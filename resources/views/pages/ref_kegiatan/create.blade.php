@extends('layouts.admin-master')

@section('title')
Menambah Kegiatan
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Menambah Kegiatan</h1>
    </div>

    <div class="section-body">
        <div class="container py-5">
            <div class="bg-white p-3 rounded">
                <form action="{{ route('ref_kegiatan.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label" for="nama_kegiatan">Nama Kegiatan</label>
                        <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="nama"
                            required>
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi"
                            required>
                    </div>

                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
