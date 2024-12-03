@extends('main')
@section('title', 'Blog')
@section('content')
    <div class="wrapper">
        <x-heading class="pt-4 semi-bold text-center">Single</x-heading>
        <hr class="h-px my-2" />
        <div class="font-sans leading-relaxed tracking-wide">
            <div class="container mx-auto px-4 py-8">
                <article class="max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/1200x600" alt="Article Image" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-800 mb-4">How to Build a Responsive Website with Tailwind
                            CSS</h1>
                        <p class="text-gray-500 text-sm mb-6">Published on November 28, 2024 by <span
                                class="text-indigo-600 font-medium">John Doe</span></p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Tailwind CSS is a utility-first CSS framework that allows developers to create unique designs
                            without leaving their HTML.
                            It provides a set of classes that can be combined to build virtually any design directly in your
                            markup.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            In this article, we will explore how to create a responsive web page using Tailwind CSS. You
                            will learn about the basics of
                            Tailwind classes, responsive design principles, and how to efficiently build modern websites.
                        </p>
                        <blockquote class="border-l-4 border-indigo-500 italic text-gray-600 pl-4 my-6">
                            "Tailwind CSS empowers developers to design with agility and focus on creativity."
                        </blockquote>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            By the end of this tutorial, you will have the confidence to create a fully responsive website
                            layout with ease.
                            Let's get started and unleash the power of Tailwind CSS.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
