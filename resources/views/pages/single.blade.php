@extends('main')
@section('title', 'Blog')
@section('content')
    <div class="wrapper">
        <x-heading class="pt-4 semi-bold text-center">Single</x-heading>
        <hr class="h-px my-2" />
        <div class="font-sans leading-relaxed tracking-wide">
            @if ($post)
                <div class="container mx-auto px-4 py-8">
                    <article class="max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{$post->images[0]->image_path}}" alt="Article Image" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title ? $post->title : '' }}</h1>
                            <p class="text-gray-500 text-sm mb-6">
                                {{ $post->created_at ? $post->created_at . ' ' : 'Unknwon image' }}<span
                                    class="text-indigo-600 font-medium">{{ $post->author->name }}</span></p>
                            <div>{{ $post->content ? $post->content : 'Unknwon artikel' }}</div>
                        </div>
                    </article>
                </div>
            @else
                <div>not foound</div>
            @endif
        </div>
    </div>
@endsection
