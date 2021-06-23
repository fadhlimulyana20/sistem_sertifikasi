@extends('guest.layout.guest-master')

@section('home', 'active')

@section('title', 'Welcome')

@section('content')

<div class="mt-50">
    <div class="container marketing">
        {{-- bg img ngga jalan --}}
        <div class="mt-5 row featurette bg-img">
            <div class="col-md-5 offset-md-1">
              <h1 class="featurette-heading">Sekilas Tentang Kami</h1><br />
              <p style="text-align:justify; font-size:14pt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-5 offset-md-1">
                <img style="width: auto; height: 350px" src="{{ asset('assets/img/certi.png') }}" width="100%" alt="gambardepan"></img>
              </svg>
           </div>
         </div>
    </div>
    <hr>
    <h2 class="mt-5 featurette-heading text-center mb-0">Penawaran Sertifikasi</h2><br /><br />
    <div class="div-card row justify-content-center mb-3">
        @foreach ($penawaran_sertifikasi as $item)
            <div class="card" style="width: 16rem;">
                <a href="/penawaran/detail/{{$item->id}}"><img src="{{ asset('assets/img/card.png') }}" class="card-img-top" alt="produk4"></a>
                <div class="card-body">
                    <h6 class="card-title">{{ $item->jenisSertifikasi->nama }}</h6>
                    <p>{{$item->deskripsi_penawaran}}</p>
                </div>
            </div>
            @if ($loop->iteration == 4)
                @break
            @endif
        @endforeach
    </div>

      <!-- /END THE FEATURETTES -->

</div>

@endsection
