@extends("layouts.app")

@section("content")



<tbody>

    <div class="pb-5 mb-5">

        <div class="row d-flex justify-content-center">
            @forelse($juegos as $juego)
            <div class="card col-lg-3 col-sm-10 col-md-5 mx-3 mb-4 mt-4 row p-0 text-center bg-dark text-white sombra">
                <div class="card-header class col-12 d-flex justify-content-center "><a href="{{url('juegos', $juego->id) }}" class="no-underline text-white"><img class="img-fluid  border p-0 " src="/images/{{$juego->Imagen}}">

                </div>
                <h4 class=" text-center">{{ $juego->Nombre }}</h4>
                </a>
            </div>

            @empty
            <table>
                <tr class="row d-flex justify-content-center">
                    <td class="col-12 p-5">
                        <div class="bg-white text-center border  px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay juegos") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            </table>

            @endforelse

        </div>
        <div class="d-flex justify-content-center pb-5 pagination">
            {{ $juegos->links() }}
        </div>


    </div>

</tbody>




@endsection