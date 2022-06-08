@extends("layouts.app")

@section("content")
<div class="flex justify-center flex-wrap p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Mis Criticas") }}</h1>
    </div>
</div>


<tbody>
    <table class="border-separate border-2 text-center border-gray-500 mt-3 p-5" style="width: 100%">

        <thead>
            <tr>
                <th scope="col">{{ ("Id_juego") }}</th>
                <th scope="col">{{ ("Descripcion Critica") }}</th>
                <th scope="col">{{ ("Valoracion") }}</th>
            </tr>
        </thead>

        <tbody class="">

            @forelse($criticasMostrar as $critica)

            <tr>
            
                <td class="border px-4 py-2">{{ $critica->id_juegos }}</td>

                <td class="border px-4 py-2">{{ $critica->Descripcion_critica }}</td>

                <td class="border px-4 py-2">{{ $critica->Valoracion }}</td>


            </tr>
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

        </tbody>
    </table>

</tbody>



@endsection