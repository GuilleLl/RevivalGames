@extends("layouts.app")

@section("content")
<div class=" d-flex justify-content-center mt-5">
    <form enctype="multipart/form-data" class="w-full max-w-lg border-4 row text-center d-flex justify-content-center" method="POST" action="{{ $route }}">
        @csrf
        @isset($update)
        @method("PUT")
        @endisset
        <h1 class="font-semibold py-5 mb-10 bg-red-900 px-5 col-12">{{ $title }} </h1>


        <div class="flex flex-wrap -mx-3 mb-6 col-12 mt-5">

            <div class="w-full px-5 row">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-1 col-12" for="Descripcion">
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

        <div class="flex flex-wrap  mb-6 col-12 mt-5">
            <div class="w-full px-5 row d-flex justify-content-center">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 col-12" for="Valoracion">
                    {{ __("Valoracion") }}
                </label>
                <input type="number" name="Valoracion" id="Valoracion" class="col-3 appearance-none block  text-gray-700 border border-gray-200 rounded py-3  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error("Valoracion")
                <div class="border border-red-400 rounded-b  mt-1 px-4 py-3 text-red-700">
                    {{ "Introduce una valoracion valida" }}
                </div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-center pb-5 px-5 mx-0">

            <button class="shadow  btn btn-success btn-sm focus:shadow-outline focus:outline-none text-dark font-bold py-2 px-4 rounded d-flex justify-content-center" type="submit">
                {{ $textButton }}
            </button>

        </div>
</div>

</form>
@endsection