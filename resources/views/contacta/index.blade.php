@extends('layouts.app')

@section('content')


    <div class="flex justify-center flex-wrap p-4 mt-5">
        @include("contacta.form")
    </div>
    @if(\Session::has('success'))
    <div class="alert alert-success">{{ \Session::get('success') }}</div>
    {{ \Session::forget('success') }}
    @endif
@endsection