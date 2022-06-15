@extends("layouts.app")

@section("content")



<tbody>
    <div class=" row mt-5 d-flex justify-content-center p-5">

        <div class="col-10 bg-dark text-white rounded m-5 d-flex align-items-center p-5 row d-flex justify-content-center sombra">
            <div class="d-flex justify-content-center col-lg-3 col-12 m-2">
                <img class="" src="/images/{{$juego->Imagen}}" alt="">
            </div>
            <div class=" col-lg-8">
                <h2 class="font-bold  text-xl underline text-center">{{$juego->Nombre}}</h2>
                <p class=" text-center">{{ $juego->Descripcion }}</p>
            </div>
        </div>
        <div class="text-center col-12 py-5">


            <table class=" text-center mt-3  bg-dark" style="width: 100%">

                @if (Auth::user()->can('userPremium'))
                <a href="{{url('criticas/create',$juego->id)}}">
                    <button class="btn btn-warning btn-lg sombra">{{ __("Añadir Critica") }}</button>
                </a>
                @endif

                @if($errors->any())
                <script language="javascript">
                    alert("Ya has hecho una critica a este juego")
                </script>
                @endif
                <tbody>
                    <div class="row pb-5 mb-5 d-flex justify-content-center">
                        @forelse($criticasMostrar as $critica)

                        <div class="card row flex-row p-2 bg-dark text-white d-flex align-items-center col-8 my-5">
                            <div class="col-lg-2">
                                <h1 class="valoracion">{{ $critica->Valoracion }}</h1>
                            </div>
                            <div class="col-lg-10">
                                <h4 class="pb-0">{{ $critica->id_usuario}}</h4>
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
                    </div>
                </tbody>
            </table>



        </div>

    </div>
</tbody>



@endsection