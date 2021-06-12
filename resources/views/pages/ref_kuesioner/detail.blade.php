@extends('layouts.admin-master')

@section('title')
    Detail Kuesioner
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Detail Kuesioner</h1>
    </div>

    <div class="section-body">
        <div class="container py-5">
            <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="fw-bold mb-0">Pertanyaan</h5>
                    <p>{{ $ref_kuesioner->pertanyaan }}</p>
                    <h5 class="fw-bold mb-0">Aktif? (1 = ya, 0 = tidak)</h5>
                    <p>{{ $ref_kuesioner->is_aktif }}</p>
                </li>
            </ul>
        </div>
    </div>
    </section>
@endsection
