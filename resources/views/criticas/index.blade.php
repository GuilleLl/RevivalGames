@extends("layouts.app")

@section("content")
<div class="flex justify-center flex-wrap p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Mis Criticas") }}</h1>
    </div>
</div>


<tbody>
    <table class="border-separate border-2 text-center border-gray-500 p-5" style="width: 100%">



        <tbody class="">
            <div class="row d-flex justify-content-center">
                @if($notfound)
                <tr>
                    <td colspan="12">
                        <div class="bg-white text-center border  px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay criticas") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
                @else
                @forelse($criticasMostrar as $critica)


                <div class="card row flex-row p-2 bg-dark text-white d-flex align-items-center col-8 my-5 text-center">
                    <div class="col-lg-2">
                        <h1 class="valoracion">{{ $critica->Valoracion }}</h1>
                    </div>
                    <div class="col-lg-10">
                        <h4 class="pb-0">{{ $critica->id_juegos }}</h4>
                        <p>{{ $critica->Descripcion_critica }}</p>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="12">
                        <div class="bg-white text-center border  px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay criticas") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>

                @endforelse
                @endif
            </div>
        </tbody>
    </table>

</tbody>



@endsection