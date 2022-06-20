@extends("layouts.app")

@section("content")



<tbody>
    <div class="d-flex justify-content-center pt-3">
        <div class="d-flex justify-content-center p-2 ">
            <form class="row  input-group sombra mx-5 col-3 text-center" id="buscador">

                <input name="buscarpor" class="form-control col-3" type="search" placeholder="Buscar por genero" aria-label="Search">

                <button class="btn btn-warning boton col-2 input-group-btn " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search ml-2" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </form>
        </div>
    </div>


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