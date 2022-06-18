@extends("layouts.app")

@section("content")
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 mb-5 pb-5 pt-5">

    <div class="flex">
        <div class="w-full mb-5 pb-5">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg ">
            <header class="font-semibold bg-warning text-dark py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">{{ $title }} </header>
                <form enctype="multipart/form-data" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-dark " method="POST" action="{{ $route }}">
                    @csrf
                    @isset($update)
                    @method("PUT")
                    @endisset
                    


                    <div class="flex flex-wrap d-flex justify-content-center">
                        <div class="w-full px-5 row ">
                            <label class="block text-white text-sm font-bold mb-2 sm:mb-4 text-white text-center" for="Descripcion">
                                {{ __("Descripción") }}
                            </label>
                            <textarea name="Descripcion" class="col-12 no-resize appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="Descripcion">{{$critica->Descripcion_critica }}</textarea>

                            @error("Descripcion")
                            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                                {{ "Introduce una descripcion valida" }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-wrap d-flex justify-content-center">
                        <div class="w-full px-5 row d-flex justify-content-center">
                            <label class="block  text-sm font-bold mb-2 sm:mb-4 text-white text-center" for="Valoracion">
                                {{ __("Valoracion") }}
                            </label>
                            <input type="number" name="Valoracion" id="Valoracion" class="col-3 appearance-none block  text-gray-700 border border-gray-200 rounded py-3  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-center">
                            @error("Valoracion")
                            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                                {{ "Introduce una valoracion valida" }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center pb-5 px-5 mx-0">

                        <button class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-dark   sm:py-4 boton" type="submit">
                            {{ $textButton }}
                        </button>

                    </div>
                </form>
            </section>
        </div>
    </div>
</main>

@endsection

