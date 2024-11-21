@extends("main")
@section("title","home")
@section("content")
<div class="banner">
   @include("components.home.banner")
</div>
    <div class="artikel my-10 flex flex-col item-center">
      <x-heading class="text-center">About Us</x-heading>
         <div class="flex flex-col lg:flex-row md:flex-row items-center p-10 md:gap-20 gap-10 justify-center" >
             <div class="flex-1 min-w-[400px] max-w-[40%] h-[200px">
                <x-image 
                src="{{ asset('images/university.jpg') }}" 
                alt="Example Image" 
                class="h-auto"
            />
            
             </div>
             <div class="flex-2 min-w-[400px] max-w-[40%] h-[200px" >
                @include("components.home.paragraph_1_")
             </div>
        </div>
         <div class="flex flex-col lg:flex-row md:flex-row items-center p-10 md:gap-20 gap-10 justify-center" >
             <div class="flex-2 min-w-[400px] max-w-[40%] h-[200px" >
                @include("components.home.paragraph_1_")
             </div>
             <div class="flex-1 min-w-[400px] max-w-[40%] h-[200px">
                <x-image 
                src="{{ asset('images/university.jpg') }}" 
                alt="Example Image" 
                class="h-auto"
            />
             </div>
        </div>
    </div>
    <div class="max-w-full w-full">
        <div class="relative pb-[56.25%] overflow-hidden shadow-lg">
            <iframe class="absolute top-0 left-0 w-full h-full"
                    src="https://www.youtube.com/embed/J89wVy88tgw?autoplay=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
        
    <div class="w-[100%] p-20">
        <x-heading class="text-center mb-20">Professors</x-heading>
        @include("components.home.list_stacked")
        @include("components.home.time_line")
    </div>
</div>
@endsection