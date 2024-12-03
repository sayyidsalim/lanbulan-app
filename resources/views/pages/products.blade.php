@extends('main')
@section('title', 'product')
@section('content')
    <div class="wrapper w-full">
        <x-heading class="pt-4 semi-bold text-center">All Product</x-heading>
        <hr class="h-px my-2" />
        <div class="mt-10">
            <div>
                @include('components.products.search_product')
            </div>
        </div>
        <div class="">
            @include('components.products.product_card')
        </div>
        @include("components.products.detail_product")
    </div>
@endsection
