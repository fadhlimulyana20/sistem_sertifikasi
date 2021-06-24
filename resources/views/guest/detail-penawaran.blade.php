@extends('guest.layout.guest-master')

@section('penawaran', 'active')

@section('title', 'Detail Sertifikasi')

@section('content')
    <div class="detail-penawaran">
    <div class="left">
    <div class="section-header">
        <h1>{{ $penawaran_sertifikasi->jenisSertifikasi->nama }}</h1>
    </div>
    <div class="desc-penawaran">
        <p>
            {{ $penawaran_sertifikasi->deskripsi_penawaran }}
        </p>
    </div>
    <div class="syarat">
        <h4>Syarat</h4>
        <ol>
            @foreach ($penawaran_sertifikasi->jenisSertifikasi->syarat as $item)
                <li>{{ $item->syarat }}</li>
            @endforeach
        </ol>
    </div>

    <div class="unit_kompetensi">
        <h4>Unit Kompetensi</h4>
        <ol>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
        </ol>
    </div>
</div>

    <div class="right">
        <div class="right_content">
        <p>Jadwal Kegiatan</p>
        <ul>
            <li><b>Pendaftaran</b><br>9 Juni 2021 - 20 Juni 2021</li>
            <li><b>Ujian</b><br>9 Juni 2021 - 20 Juni 2021</li>
        </ul>
        <input type="submit" name="daftar" value="Daftar" id="daftar" >
        </div>


    </div>
</div>
@endsection
