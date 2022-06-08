@extends("layouts.app")

@section("content")
<div class="flex justify-center flex-wrap p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Hazte Premium") }}</h1>
    </div>
</div>


<tbody>
    @if (Auth::user()->can('userPaypal'))
    <div class="row d-flex justify-content-center">
        <a href="{{url('processPaypal')}}"><button class="btn btn-danger mx-2 col-2">Hazte Premium!</button></a>
    </div>
    @else


    <section class="gradient w-full mx-auto text-center pt-6 pb-12">
        <h3 class="my-4 text-3xl font-extrabold">
            Ya eres Premiun!
        </h3>

    </section>
    @endif

</tbody>




@endsection