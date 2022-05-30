@extends('adminlte::page')

@section("content")

<h1 class="text-center">{{ __("Listado de reseñas") }}</h1>

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
    <thead>
        <tr>
            <th scope="col">{{ ("Autor_Reseña") }}</th>
            <th scope="col">{{ ("Juego") }}</th>
            <th scope="col">{{ ("Descripcion Reseña") }}</th>
            <th scope="col">{{ ("Valoracion") }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($reseñas as $reseña)
        <tr>

            <td class="border px-5 py-2">autor</td>

            <td class="border px-4 py-2">juego</td>

            <td class="border px-4 py-2">{{ $reseña->Descripcion_Reseña }}</td>

            <td class="border px-4 py-2">{{ $reseña->Valoracion }}</td>


           
            <td class="border px-4 py-2">
           
                <a href="#" class="text-red-400" onclick="event.preventDefault();
                                document.getElementById('delete-reseña-{{ $reseña->id }}-form').submit();"><button class="btn btn-danger btn-sm">{{ __("Eliminar") }}</button>
                </a>
                <form id="delete-reseña-{{ $reseña->id }}-form" action="{{ route('reseñas.destroy', $reseña->id) }}" method="POST" class="hidden">
                    @method("DELETE")
                    @csrf
                </form>

            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay reseñas") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>



        <div class="mt-3">
            {{ $reseñas->links() }}
           
        </div>


@endsection