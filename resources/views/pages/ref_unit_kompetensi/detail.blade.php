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
                <h5 class="fw-bold mb-0">Nama</h5>
                <p>{{ $ref_unit_kompetensi->nama }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

