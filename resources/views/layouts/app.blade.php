<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Nadia's Garden Restaurant") }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="container">
        <div class="top-bar">
            <div>Call us at (123) 456-7891</div>
            <div><a href="#">get driving directions</a></div>
        </div>            
        <header>
            <a href="/"><img src="{{ asset('/images/logo.png') }}"></a>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="separator"></li>
                    <li><a href="#">About</a></li>
                    <li class="separator"></li>
                    <li><a href="/menu">Menu</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Reservations</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Location &amp; Hours</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Contact</a></li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>  
        <main class="page-content">
            @yield('content')
            <br>
        </main>    
        <footer>
            NADIA’S GARDEN RESTAURANT IS A FICTITIOUS BRAND CREATED BY LYNDA.COM SOLELY FOR THE PURPOSE OF TRAINING.
            ALL PRODUCTS AND PEOPLE ASSOCIATED WITH NADIA’S GARDEN RESTAURANT ARE ALSO FICTITIOUS.
            ANY RESEMBLANCE TO REAL BRANDS, PRODUCTS, OR PEOPLE IS PURELY COINCIDENTAL. 
            INFORMATION PROVIDED ABOUT THE PRODUCT IS ALSO FICTITIOUS AND SHOULD NOT BE CONSTRUED TO BE REPRESENTATIVE 
            OF ACTUAL PRODUCTS ON THE MARKET IN A SIMILAR PRODUCT CATEGORY.
        </footer>   
    </div>
</body>
</html>
