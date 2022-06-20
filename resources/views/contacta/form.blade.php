<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 mb-5 pb-5 pt-5">

    <div class="flex">
        <div class="w-full mb-5 pb-5">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg sombra">
                <header class="font-semibold bg-warning text-dark py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">Contacto con soporte </header>
                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-dark" method="POST" action="{{ route('contacta.store') }}">
                    @csrf


                    <div class="flex flex-wrap -mt-10">
                        <div class="w-full px-5">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mt-5 mb-2" for="name">
                                {{ __("Tu Nombre") }}
                            </label>
                            <input name="name" value="{{ Auth::user()->name }}" class="appearance-none block w-full bg-dark text-white   leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
                            @error("name")
                            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                                {{ 'EL nombre esta vacio' }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3 ">
                        <div class="w-full px-5">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mt-5 mb-2" for="email">
                                {{ __("Tu Email") }}
                            </label>
                            <input name="email" value="{{ Auth::user()->email }}" class="appearance-none block w-full bg-dark text-white   mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
                            @error("email")
                            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                                {{ 'EL correo esta vacio' }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-wrap mt-3">
                        <div class="w-full px-5">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mt-5 mb-2" for="mensaje">
                                {{ __("Mensaje") }}
                            </label>
                            <textarea name="mensaje" class="no-resize appearance-none block w-full bg-dark 
            text-white border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
            focus:bg-white focus:border-gray-500 h-48 resize-none" id="mensaje"></textarea>
                            @error("mensaje")
                            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-4 text-red-700">
                                {{ 'EL campo esta vacio' }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pb-5 px-5 mx-0">
                        <button class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-dark   sm:py-4 boton" type="submit">
                            {{ 'Enviar mensaje' }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>