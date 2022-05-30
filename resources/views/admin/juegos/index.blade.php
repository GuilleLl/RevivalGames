@extends('adminlte::page')


@section("content")

        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de Juegos") }}</h1>
            <a href="{{ route('juegos.create') }}" >
            <button class="btn btn-success btn-lg">{{ __("Añadir Juego") }}</button>
            </a>
        </div>
    

    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-2 py-2">{{ __("Nombre") }}</th>
            <th class="px-2 py-2">{{ __("Descripcion") }}</th>
            <th class="px-2 py-2">{{ __("Genero") }}</th>
            <th class="px-5 py-2">{{ __("Fecha_Salida") }}</th>
            <th class="px-2 py-2">{{ __("Imagen") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($juegos as $juego)
                <tr>
                    <td class="border px-1 py-2">{{ $juego->Nombre }}</td>
                    <td class="border px-1 py-2">{{ $juego->Descripcion }}</td>
                    <td class="border px-1 py-2">{{ $juego->Genero }}</td>
                    <td class="border px-1 py-2">{{ $juego->Fecha_salida }}</td>
                    <td class="border px-1 py-2">{{ $juego->Imagen }}</td>
                    <td class="border px-1 py-2">
                        <a href="{{ route('juegos.edit', ['juego' => $juego]) }}"><button class="btn btn-primary btn-sm px-3">{{ __("Editar") }}</button></a>
                        <a
                            href="#"
                            class="text-red-400"
                            onclick="event.preventDefault();
                                document.getElementById('delete-juego-{{ $juego->id }}-form').submit();"
                        ><button class="btn btn-danger btn-sm mt-2">{{ __("Eliminar") }}</button>
                        </a>
                        <form id="delete-juego-{{ $juego->id }}-form" action="{{ route('juegos.destroy', ['juego' => $juego]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">
                        <div class="bg-red-100 text-center border border-red-400 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay juegos") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay juegos que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
 
        <div class="mt-3">
            {{ $juegos->links() }}
           
        </div>


@endsection
