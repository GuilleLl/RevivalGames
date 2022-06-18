@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 mb-5 pb-5">
    <div class="flex pb-5">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-warning text-dark py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Registrate') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-dark" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Nombre') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block  text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Correo Electronico') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ 'El correo ya existe' }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block  text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Contraseña') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block  text-sm font-bold mb-2 sm:mb-4 text-white">
                            {{ __('Confirma Contraseña') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                            
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ 'La contraseñas no son correctas' }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-dark boton sm:py-4">
                            {{ __('Registrarse') }}
                        </button>

                        <p class="w-full text-xs text-center text-white my-6 sm:text-sm sm:my-8">
                            {{ __('¿Ya tienes una cuenta?') }}
                            <a class="text-warning no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Inicia sesion') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
