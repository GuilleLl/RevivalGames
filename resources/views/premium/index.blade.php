@extends("layouts.app")

@section("content")
<tbody">
<div class="flex justify-center flex-wrap p-4  pb-5 mb-5">
    <div class="text-center bg-dark rounded text-white p-5">
        <h1 class="mb-5 text-warning">{{ __("Hazte Premium!") }}</h1>
        <h3>Podras añadir criticas a tus juegos favoritos y compartirlas con el resto de usuarios</h3>
        <br>
        <h3 >Unete a nuestra comunidad y podras acceder a un monton de ofertas en tus juegos favoritos </h3>
        <br>
        <h3 class="pb-5">Conoce a gente que tenga los mismos gustos que tu y enseña a todos tus opiniones sobre los juegos que hayas jugado</h3>
        <h4>Tan solo por 0'99!!</h4>
    @if (Auth::user()->can('userPaypal'))
    <div class="d-flex justify-content-center">
        <a href="{{url('processPaypal')}}">
            <p><button class="btn boton btn-warning mx-2 p-3">Hazte Premium!</button></p>
        </a>

    </div>
    @else


    <section class="gradient w-full mx-auto text-center pt-6 pb-12 d-flex justify-content-center row">
        <h3 class="my-4 text-3xl font-extrabold">
            Ya eres Premiun!
        </h3>
        <iframe src="https://giphy.com/embed/0a9TnPbc9tlxaSZTY9" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
    </section>
    @endif
    </div>
</div>



    


</tbody>




@endsection

