@extends('layouts.admin-master')

@section('title')
    Menambah Asesor
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Menambah Asesor</h1>
    </div>
    <div class="section-body">
        <div class="bg-white p-3 rounded">
            <div class="container py-5">
                <form action="{{ route('asesor.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama"
                            placeholder="Nama" required>
                    </div>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

