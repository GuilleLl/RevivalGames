@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 mb-5 pb-5">
    <div class="flex">
        <div class="w-full mb-5 pb-5">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg ">

                <header class="font-semibold bg-warning text-dark py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Inicio de sesion') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-dark" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-white text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Correo Electronico') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>


                    </div>

                    <div class="flex flex-wrap ">
                        <label for="password" class="block  text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Contraseña') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full border-red-500" name="password"
                            required>

                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ 'El usuario o la contraseña no son correctos' }}
                        </p>
                        @enderror


                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-dark   sm:py-4 boton">
                            {{ __('Inicia') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-white my-6 sm:text-sm sm:my-8">
                            {{ __("¿No tienes una cuenta?") }}
                            <a class="text-warning hover:text-warning no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Registrate') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
