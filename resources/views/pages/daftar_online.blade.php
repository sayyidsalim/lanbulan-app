@extends('main')
@section('title', 'daftar-online')
@section('content')
    <div class="wrapper">
        <x-heading class="pt-4 semi-bold text-center">Register Online</x-heading>
        <hr class="h-px my-2" />
        <div class="flex w-full items-center justify-center">
           @include("components.daftar-online.form_daftar")
        </div>
    </div>
@endsection
