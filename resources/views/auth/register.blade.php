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
      .form-register{
        width: 100%;
        max-width: 360px;
        padding: 15px;
        margin: auto;
        border-radius: 20px;
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      }
      input {
          margin-bottom: 6px;
          text-align:left;
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
<body class="text-center">
    <div class="div-center">
        <form class="form-register" method="POST" action="{{ route('register') }}">
            <h1 class="h3 mb-3 font-weight-bold">REGISTER</h1>
            @csrf
            <input id="name" class="form-control" type="name" name="name" :value="old('name')" placeholder="Name" required autofocus>
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus>
            <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password" placeholder="Password" required="">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Confirm Password" required="">
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Register</button>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input class="block mt-1 w-full" id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
