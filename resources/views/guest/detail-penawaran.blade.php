@extends('guest.layout.guest-master')

@section('penawaran', 'active')

@section('title', 'Detail Sertifikasi')

@section('content')
    <div class="detail-penawaran">
    <div class="left">
    <div class="section-header">
        <h1>Nama Sertifikasi</h1>
    </div>
    <div class="desc-penawaran">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus, doloremque! Natus vitae, ipsum, porro doloremque
            provident molestias accusamus, repellendus nemo ut
            exercitationem maxime repellat sit quibusdam quam aspernatur
            fugiat iusto.
        </p>
    </div>
    <div class="syarat">
        <h4>Syarat</h4>
        <ol>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
            <li>Syarat syarat syarat syarat syarat styarataaa</li>
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
