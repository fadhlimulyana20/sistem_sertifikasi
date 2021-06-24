<div class="container">
    <img src="{{ asset('assets/img/logo.png') }}" alt="" style="height: 50px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item dropdown">
                @if (Auth::user())
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.adminIndex') }}">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                            <input type="submit" class="d-none">
                        </form>
                        <li><a class="dropdown-item" onclick="logOut()" type="button">Logout</a></li>
                    </ul>
                @else
                    <a class="nav-link text-center @yield('login')" href="/login    ">Login</a>
                @endif
            </li>
        </ul>
    </div>
</div>

<script>
    var logout_btn = document.getElementById('logout_btn');
    var logout = document.getElementById('logout');

    function logOut() {
        document.getElementById('logout').submit();
    }
</script>
