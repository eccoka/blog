<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    </head>
    <body>
        <nav class="navbar has-background-grey-darker" role="navigation" aria-label="main navigation">
            <div class="navbar-end">
                <div class="navbar-item">
                  <div class="buttons">
                    @if (Route::has('login'))  
                        @auth
                            <a href="{{ url('/home') }}" class="button is-primary"><strong>Home</strong></a>
                        @else    
                            <a href="{{ route('login') }}" class="button is-light"><strong>Sign up</strong></a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="button is-light"><strong>Log in</strong></a>
                            @endif
                        @endauth
                    @endif
                  </div>
                </div>
            </div>
        </nav>
        <div class="container" id="app">
            @yield('content')
        </div>
    </body>
</html>
