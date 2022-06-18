@extends('adminlte::page')
<link rel="icon" href="{{ asset('Logo.ico') }}">
@section("content")

<h1 class="text-center">{{ __("Listado de Criticas") }}</h1>

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
    <thead>
        <tr>
            <th scope="col">{{ ("Autor_Critica") }}</th>
            <th scope="col">{{ ("Juego") }}</th>
            <th scope="col">{{ ("Descripcion Critica") }}</th>
            <th scope="col">{{ ("Valoracion") }}</th>
        </tr>
    </thead>
    <tbody>
        @if($errors->any())
        <script language="javascript">
            alert("Se ha eliminado esta critica")
        </script>
        @endif
        @forelse($criticas as $critica)
        <tr>

            <td class="border px-5 py-2">{{ $critica->users->name}}</td>

            <td class="border px-4 py-2">{{ $critica->juegos->Nombre}}</td>

            <td class="border px-4 py-2">{{ $critica->Descripcion_critica }}</td>

            <td class="border px-4 py-2">{{ $critica->Valoracion }}</td>



            <td class="border px-4 py-2">

                <a href="#" class="text-red-400" onclick="event.preventDefault();
                                document.getElementById('delete-critica-{{ $critica->id }}-form').submit();"><button class="btn btn-danger btn-sm">{{ __("Eliminar") }}</button>
                </a>
                <form id="delete-critica-{{ $critica->id }}-form" action="{{ route('criticas.destroy', $critica->id) }}" method="POST" class="hidden">
                    @method("DELETE")
                    @csrf
                </form>

            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay criticas") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>



<div class="mt-3">
    {{ $criticas->links() }}

</div>


@endsection