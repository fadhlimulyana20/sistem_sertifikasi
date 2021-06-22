@extends('layouts.admin-master')

@section('title')
    Detail Asesor
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Detail Asesor</h1>
    </div>

    <div class="section-body">
        <div class="container py-5">
            <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="fw-bold mb-0">Nama</h5>
                    <p>{{ $asesor->nama }}</p>
                </li>
            </ul>
        </div>
    </div>
    </section>
@endsection
