@extends('layouts.app')

@section('content')


<div class="flex justify-center flex-wrap p-4 mt-5">
@if(\Session::has('success'))
    <div class="d-flex justify-content-center col-12">
        <div class="alert alert-success ">{{ \Session::get('success') }}</div>
    </div>

    {{ \Session::forget('success') }}
    @endif
    @include("contacta.form")

</div>

@endsection