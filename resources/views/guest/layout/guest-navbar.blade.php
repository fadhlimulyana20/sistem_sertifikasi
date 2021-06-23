<div class="container">
    <img src="{{ asset('assets/img/logo.png') }}" alt="" style="height: 50px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link text-center @yield('home')" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-center @yield('penawaran')" href="/penawaran">Penawaran</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-center @yield('tentang')" href="/tentang">Tentang</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-center @yield('login')" href="/login    ">Login</a>
        </li>
    </ul>
    </div>
</div>
