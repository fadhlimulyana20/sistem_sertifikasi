@extends('guest.layout.guest-master')

@section('penawaran', 'active')

@section('title', 'Penawaran Sertifikasi')

@section('content')
<h2 class="mt-5 featurette-heading text-center mb-0">Penawaran Sertifikasi</h2><br /><br />
<div class="div-card row justify-content-center mb-3">
    @foreach ($penawaran_sertifikasi as $item)
            <div class="card" style="width: 16rem;">
                <a href="/penawaran/detail/{{$item->id}}"><img src="{{ asset('assets/img/card.png') }}" class="card-img-top" alt="produk4"></a>
                <div class="card-body">
                    <h6 class="card-title">{{ $item->nama_sertifikasi }}</h6>
                    <p>{{$item->deskripsi_penawaran}}</p>
                    <p class="card-text small">
                        <i class="far fa-calendar-alt me-2"></i>
                        <span>{{ \Carbon\Carbon::parse($item->tanggal_awal)->toFormattedDateString() }}</span>
                        <span> -
                            {{ \Carbon\Carbon::parse($item->tanggal_akhir)->toFormattedDateString() }}</span>
                    </p>
                </div>
            </div>
        @endforeach
</div>
@endsection
