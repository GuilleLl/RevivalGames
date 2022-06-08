@extends("layouts.app")

@section("content")



<tbody>
    <div class=" ">
        <div class="container self-center flex flex-wrap mt-20 p-8">
            <div class="flex justify-center flex-col">
                <img class="" src="/images/{{$juego->Imagen}}" alt="">
            </div>
            <div class="col-span-3 grid gap-y-9">
                <div class="">
                    <h2 class="col-span-11 font-bold  text-xl ">{{$juego->Nombre}}</h2>
                </div>
            </div>
            <div class="text-center col-12">


                <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">

                    <thead>
                        <tr>
                            <th scope="col">{{ ("Autor_Critica") }}</th>
                            <th scope="col">{{ ("Descripcion Critica") }}</th>
                            <th scope="col">{{ ("Valoracion") }}</th>
                        </tr>
                    </thead>
                    @if (Auth::user()->can('userPremium'))
                    <a href="{{url('criticas/create',$juego->id)}}" >
                        <button class="btn btn-success btn-lg ">{{ __("Añadir Critica") }}</button>
                    </a>
                    @endif
                    
                    @if($errors->any())
                        <script language="javascript">alert("Ya has hecho una critica a este juego")</script>
                    @endif
                    <tbody class="">

                        @forelse($criticasMostrar as $critica)

                        <tr>

                            <td class="border px-5 py-2">{{ $critica->id_usuario}}</td>

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



            </div>

        </div>
    </div>
</tbody>



@endsection