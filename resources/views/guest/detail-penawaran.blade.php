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
            @foreach ($penawaran_sertifikasi->jadwal as $item)
                <li><b>{{ $item->kegiatan->nama_kegiatan }}</b><br>{{ $item->tanggal_awal }} - {{ $item->tanggal_akhir }}</li>
            @endforeach
        </ul>
        <input type="submit" name="daftar" value="Daftar" id="daftar" >
        </div>


    </div>
</div>
@endsection
