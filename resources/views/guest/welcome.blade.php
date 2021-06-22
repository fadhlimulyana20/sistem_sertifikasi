@extends('guest.layout.guest-master')

@section('home', 'active')

@section('title', 'Welcome')

@section('content')

<div class="mt-50">
    <div class="container marketing">
        {{-- bg img ngga jalan --}}
        <div class="mt-5 row featurette bg-img">
            <div class="col-md-5 offset-md-2">
              <h2 class="featurette-heading">Sekilas Tentang Kami</h2><br />
              <p class="lead" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('assets/img/certi.png') }}" width="100%" alt="gambardepan"></img>
              </svg>
           </div>
         </div>
    </div>

     <h2 class="mt-5 featurette-heading text-center mb-0">Produk Terlaris</h2><br /><br />
    <div class="row justify-content-center mb-3">
      <div class="card" style="width: 16rem;">
        <a href="#"><img src="{{ asset('assets/img/p-250.png') }}" class="card-img-top" alt="produk4"></a>
            <div class="card-body">
                <h6 class="card-title">Penawaran 1</h6>
                <p>Deskripsi</p>
            </div>
     </div>
    <div class="card mr-3" style="width: 16rem;">
        <a href="#"><img src="{{ asset('assets/img/p-250.png') }}" class="card-img-top" alt="produk4"></a>
            <div class="card-body">
                <h6 class="card-title">Penawaran 2</h6>
                <p>Deskripsi</p>
            </div>
    </div>
    <div class="card mr-3" style="width: 16rem;">
        <a href="#"><img src="{{ asset('assets/img/p-250.png') }}" class="card-img-top" alt="produk4"></a>
            <div class="card-body">
                <h6 class="card-title">Penawaran 3</h6>
                <p>Deskripsi</p>
            </div>
    </div>
        <div class="card mr-3" style="width: 16rem;">
          <a href="#"><img src="{{ asset('assets/img/p-250.png') }}" class="card-img-top" alt="produk4"></a>
            <div class="card-body">
                <h6 class="card-title">Penawaran 4</h6>
                <p>Deskripsi</p>
            </div>
        </div>
    </div>

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
</div>


@endsection
