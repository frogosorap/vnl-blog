<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>VNL</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header id="navbar"class="navbar">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img src="images/vnl.png" style="width:10%">
                        {{-- <img src="{{ asset('images/vnl.png') }}" alt=""> --}}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="links-a" href="/">Home</a>
                    <a class="links-a" href="/highlights">Highlights</a>
                    <a class="links-a" href="/matches">Fixtures</a>
                    <a class="links-a" href="/gallery">Gallery</a>
                    <a class="links-a" href="/blog">Blog</a>
                    @guest
                        <a class="links-a" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="links-a" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="links-a"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <script>
            window.onscroll = function() {stickyNavbar()};
    
            var navbar = document.querySelector('.navbar');
            var sticky = navbar.offsetTop;
    
            function stickyNavbar() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
            }
        </script>

        @yield('content')
    </div>
    <div>
        @include('layouts.footer')
    </div>
</body>
</html>
