@extends('layouts.admin-master')

@section('title')
    Syarat Sertifikasi
@endsection

@section('content')
<body>
    <section class="section">
        <div class="section-header">
            <h1>Menambahkan Syarat Sertifikasi</h1>
        </div>
        <div class="container py-5">
            <form action="{{ route('syarat_sertifikasi.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <input class="form-control" type="text" name="syarat" id="syarat" 
                    placeholder="syarat sertifikasi" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_aktif" value="" id="is_aktif">
                    <label class="form-check-label" for="is_aktif">
                        Active?
                    </label>
                </div>
                <button class="btn btn-success" type="submit">Simpan</button>
            </form>
        </div>
    </section>
</body>
@endsection