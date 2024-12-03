@extends('main')
@section('title', 'home')
@section('content')
    <div class="banner">
        @include('components.home.banner')
    </div>
    <div class="artikel my-10 flex flex-col item-center">
        <x-heading class="text-center">About Us</x-heading>
        <hr class="h-px my-8" />
        <div class="flex flex-col lg:flex-row md:flex-row items-center p-10 md:gap-20 gap-10 justify-center">
            <div class="flex-1 min-w-[400px] max-w-[40%] h-[200px">
                <x-image src="{{ asset('images/university.jpg') }}" alt="Example Image" class="h-auto" />

            </div>
            <div class="flex-2 min-w-[400px] max-w-[40%] h-[200px">
                @include('components.home.paragraph_1_')
            </div>
        </div>
        <div class="flex flex-col lg:flex-row md:flex-row items-center p-10 md:gap-20 gap-10 justify-center">
            <div class="flex-2 min-w-[400px] max-w-[40%] h-[200px">
                @include('components.home.paragraph_1_')
            </div>
            <div class="flex-1 min-w-[400px] max-w-[40%] h-[200px">
                <x-image src="{{ asset('images/university.jpg') }}" alt="Example Image" class="h-auto" />
            </div>
        </div>
    </div>

    <video class="w-full" autoplay controls>
        <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    <div class="w-[100%] p-20">
        <x-heading class="text-center">Professors</x-heading>
        <hr class="h-px my-8">
        @include('components.home.list_stacked')
        @include('components.home.time_line')
    </div>
@endsection
