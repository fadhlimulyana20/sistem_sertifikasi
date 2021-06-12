<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('assets/css/guest.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow container-fluid fixed-top">
            @include('guest.layout.guest-navbar')
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('guest.layout.guest-footer')
    </footer>
</body>

</html>
