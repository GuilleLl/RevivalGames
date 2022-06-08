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
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="{{ asset('Logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('Logo.png') }}">
    <link rel="icon" href="{{ asset('Logo.ico') }}">
</head>

<body class="bg-secondary h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-dark py-6">
            <div class="container mx-auto flex justify-between  px-6 ">
                <div class="flex justify-start">
                    <img src="{{ asset('Logo.png') }}" style="width:30px;height:30px;">
                    <a href="{{ url('/home') }}" class="text-lg font-semibold text-gray-100 no-underline hover:text-orange-500 px-1 pt-2">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @auth
                    
                    <a href="{{url('juegos')}}" class="text-lg font-semibold text-gray-100 no-underline hover:text-orange-500 px-5 pt-2">
                        {{__('Juegos') }}
                    </a>

                    @if (Auth::user()->can('userPremium'))
                    <a href="{{url('misCriticas')}}" class="text-lg font-semibold text-gray-100 no-underline hover:text-orange-500 px-5 pt-2">
                        {{__('Mis Criticas') }}
                    </a>
                    @endif

                    <a href="{{url('contacta')}}" class="text-lg font-semibold text-gray-100 no-underline hover:text-orange-500 px-5 pt-2">
                        {{__('Contacta') }}
                    </a>

                    @if (Auth::user()->can('userPaypal'))
                    <a href="{{url('premium')}}" class="text-lg font-semibold text-gray-100 no-underline hover:text-orange-500 px-5 pt-2">
                        {{__('Hazte Premium!') }}
                    </a>
                    @endif

                    @endauth
                </div>

                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                    <a class="no-underline hover:underline  text-white" href="{{ route('login') }}">{{ __('Inicia Sesion') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline  text-white" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline text-white" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Desconectate') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest

                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>

</html>