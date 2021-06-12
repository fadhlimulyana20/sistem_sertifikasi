@extends('layouts.admin-master')

@section('title', 'Proses Pendaftaran Sertifikasi')

@section('content')
    <div class="container content-main">

        {{-- BreadCumb --}}
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Validasi Biodata</li>
                <li class="breadcrumb-item fw-bold">Validasi Syarat</li>
                <li class="breadcrumb-item">Validasi Kompetensi</li>
                <li class="breadcrumb-item">Review dan Finalisasi</li>
            </ol>
        </nav>

        <div class="alert alert-info" role="alert">
            Anda sedang mendaftar ke setifikasi {{ $pendaftar->penawaranSertifikasi->jenisSertifikasi->nama }}. Pastikan data asesi yang anda buat sudah benar sebelum melanjutkan ke proses pendaftaran selanjutnya.
        </div>

        <form action="{{ route("pendaftar.asesi_validasi_syarat") }}" method="POST">
            @csrf
            @method("POST")
            <div class="bg-white shadow rounded px-2 py-md-4 py-3 px-md-4">
                <h3 class="mb-4">Validasi Syarat</h3>
                <input type="hidden" name="id_pendaftar" value="{{ $pendaftar->id }}">
                <ul class="list-group list-group-flush  ">
                    @foreach ($pendaftar_syarat as $syarat)
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                {{ $syarat->syarat_sertifikasi->syarat }}
                            </div>
                            <div>
                                @if ($syarat->status_verifikasi_syarat)
                                    <input class="form-check-input" type="checkbox" name="syarat[]" id="{{ $syarat->id }}" value="{{ $syarat->id }}" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" name="syarat[]" id="{{ $syarat->id }}" value="{{ $syarat->id }}">
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="row d-flex justify-content-end py-3">
                <div class="col-md-4 d-grid">
                    <input type="submit" class="btn btn-success" value="Simpan dan Lanjut">
                </div>
            </div>
        </form>
    </div>
@endsection
