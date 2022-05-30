

<form enctype="multipart/form-data" class="w-full max-w-lg border-4 row" method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
     <h1 class="font-semibold py-5 mb-10 bg-red-900 px-5 col-12">{{ $title }} </h1>
    <div class="flex flex-wrap -mx-3 mb-6 col-6">
        <div class="w-full px-5 row">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3 col-12" for="Nombre">
                {{ __("Nombre") }}
            </label>
            <input name="Nombre" value="{{$juego->Nombre }}" class="col-12 appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Nombre" type="text">
            @error("Nombre")
            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                {{ "Introduce un nombre valido" }}
            </div>
            @enderror
        </div>
    </div>

    

    <div class="flex flex-wrap -mx-3 mb-6 col-6">
        <div class="w-full px-5 row">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3 col-12" for="Genero">
                {{ __("Genero") }}
            </label>
            <input name="Genero" value="{{$juego->Genero }}" class="col-12 appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Genero" type="text">
            @error("Genero")
            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                {{ "Introduce un genero valido" }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6 col-12 mt-5">

        <div class="w-full px-5 row">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-1 col-12" for="Descripcion">
                {{ __("Descripción") }}
            </label>
            <textarea name="Descripcion" class="col-12 no-resize appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="Descripcion">{{$juego->Descripcion }}</textarea>
            
            @error("Descripcion")
            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                {{ "Introduce una descripcion valida" }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap  mb-6 col-12 mt-5">
        <div class="w-full px-5 row">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 col-12" for="Fecha_salida">
                {{ __("Fecha de salida") }}
            </label>

            <input type="date" name="Fecha_salida" id="Fecha_salida" value="{{$juego->Fecha_salida }}" class="col-3 appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
            @error("Fecha_salida")
            <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                {{ "Introduce una fecha valida" }}
            </div>
            @enderror
        </div>
    </div>

    <!-- <div class="flex flex-wrap  mb-6 col-12 mt-5">
        <div class="w-full px-5 row">
            <label class="col-12 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3" for="Imagen">
                {{ __("Imagen") }}
            </label>
            <input name="Imagen" value="{{$juego->Imagen}}" class="col-3 appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Imagen" type="file">
            @error("Imagen")
            <div class="w-100"></div>
            <div class="border border-red-400 rounded-b mt-1 px-4 py-3 text-red-700">
                {{ "Introduce una imagen valida" }}
            </div>
            @enderror
        </div>
    </div> -->
    <div class="md:flex pb-5 px-5 md:items-center mt-5">
        <div class="md:w-1/3 ">
            <button class="shadow  btn btn-success btn-sm focus:shadow-outline focus:outline-none text-dark font-bold py-2 px-4 rounded" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>
