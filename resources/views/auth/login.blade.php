<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .form-signin{
        width: 100%;
        max-width: 360px;
        padding: 15px;
        margin: auto;
        border-radius: 20px;
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      }
      input {
          margin-bottom: 10px;
          text-align: left;
      }
      body {
          display: block;
          margin: 8px
      }
      .div-center{
        min-height: 100%;
        display: flex;
        align-items: center;
      }

    </style>
</head>
<body>
    <div class="div-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            <h1 class="h3 mb-3 font-weight-bold text-center">LOGIN</h1>
            @csrf
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" required autocomplete="current-password" placeholder="Password" required="">
            <div class="checkbox m-2">
                <label><input type="checkbox" value="remember-me"> Remember me</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            <div class="flex items-center text-center justify-end mt-4">
                <a href="{{ route('register') }}">
                    {{ __('Create an account') }}
                </a>
            </div>
        </form>
    </div>
</body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
