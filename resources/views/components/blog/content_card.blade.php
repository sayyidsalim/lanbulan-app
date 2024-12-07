<div class="container w-full p-10 flex flex-col md:flex-row lg:flex-row gap-5 flex-wrap">
    @isset($posts)
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="max-w-sm border border-gray-200 rounded-lg shadow bg-white mt-5">
                    <a href="{{ route('blog.show', $post->id) }}">
                        <img class="rounded-t-lg" src="{{ $post->images->first()->image_path }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('blog.show', $post->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $post->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-black">{{ Str::limit($post->content, 50) }}</p>
                        <a href="{{ route('blog.show', $post->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none bg-red-700 ">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <h1>not Found</h1>
        @endif
    @endisset

</div>
