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
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="{{ asset('Logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('Logo.png') }}">
    <link rel="icon" href="{{ asset('Logo.ico') }}">
    <link href="css/font-awesome.css" rel="stylesheet">

</head>

<body class="bg-secondary italic ">

    <header class="bg-dark">


        <nav class="navbar navbar-expand-lg navbar-dark  d-flex justify-content-center container  flex justify-between mx-auto text-center row">
            <a href="{{ url('/home') }}" class=" font-semibold text-gray-100 no-underline hover:text-orange-500  nav-item col-md-12 col-lg-2 d-flex justify-content-center  p-0">
                <img src="{{ asset('Logo.png') }}" style="width:100px;height:100px;">
            </a>
            <button class="navbar-toggler col-2 " type="button" data-toggle="collapse" data-target="#opciones">
                <span class="navbar-toggler-icon "></span>
            </button>


            <div class="collapse navbar-collapse col-lg-12" id="opciones">
                <div class="container-fluid d-flex justify-content-between  row mx-1 text-center">

                    @auth

                    <a href="{{url('juegos')}}" class="text-xl font-semibold text-gray-100 no-underline  nav-item d-lg-flex align-items-center col-lg-2 col-md-3 col-sm-12 p-5">
                        {{__('Juegos') }}
                    </a>

                    @if (Auth::user()->can('userPremium'))
                    <a href="{{url('misCriticas')}}" class="text-xl font-semibold text-gray-100 no-underline   nav-item d-lg-flex align-items-center col-lg-3 col-md-4 col-sm-12 p-5">
                        {{__('Mis Criticas') }}
                    </a>
                    @endif

                    <a href="{{url('contacta')}}" class="text-xl font-semibold text-gray-100 no-underline   nav-item d-lg-flex align-items-center col-lg-2 col-md-3 col-sm-12 p-5">
                        {{__('Contacta') }}
                    </a>

                    @if (Auth::user()->can('userPaypal'))
                    <a href="{{url('premium')}}" class="text-xl font-semibold text-gray-100 no-underline  nav-item d-lg-flex align-items-center col-lg-4 col-md-3 col-sm-12 p-5">
                        {{__('Hazte Premium!') }}
                    </a>
                    @endif

                    @endauth

                </div>
                <div class="space-x-2 text-gray-300 text-sm sm:text-base nav-item col-lg-3 ">
                    @guest
                    <a class="no-underline hover:underline  text-white " href="{{ route('login') }}">{{ __('Inicia Sesion') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline  text-white " href="{{ route('register') }}">{{ __('Registrate') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline text-white " onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Desconectate') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest

                </div>
            </div>
        </nav>

    </header>




    @yield('content')
    <footer class="p-3 text-light d-flex justify-content-between bg-dark row">
        <p class="col-lg-6 col-sm-12 text-lg-start text-center align-items-center"> Creado por Guillermo Llosa</p>
        <div class="row  text-center col-sm-12 col-lg-3">
            <a href="#" class="col-4 d-flex justify-content-center align-items-center "><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
            <a href="#" class="col-4 d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a>
            <a href="#" class="col-4 d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg></a>
        </div>
    </footer>
</body>

</html>