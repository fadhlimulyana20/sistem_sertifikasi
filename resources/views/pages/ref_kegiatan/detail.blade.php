@extends('layouts.admin-master')

@section('title')
    Detail
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Detail</h1>
    </div>

    <div class="section-body">
        <div class="container">
            <div class="bg-white p-3 rounded">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5 class="fw-bold mb-0">Nama Kegiatan</h5>
                        <p>{{ $ref_kegiatan->nama_kegiatan }}</p>
                        <h5 class="fw-bold mb-0">Deskripsi</h5>
                        <p>{{ $ref_kegiatan->deskripsi }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>
@endsection
