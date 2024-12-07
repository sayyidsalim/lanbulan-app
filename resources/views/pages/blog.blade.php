@extends('main')
@section('title', 'Blog')
@section('content')
<div class="wrapper">
        <x-heading class="pt-4 semi-bold text-center">Blog</x-heading>
        <hr class="h-px my-2" />
        <div class="flex justify-center">
            @include('components.blog.content_card')
        </div>
        <div class="flex justify-center mb-4">
            @include('components.blog.pagination')
        </div>
    </div>
@endsection
