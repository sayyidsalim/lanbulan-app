<div class="relative">
    <h3 class="text-center mt-4 text-2xl font-bold">Books</h3>
    <hr class="mt-3" />
    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-wrap justify-center gap-5 my-10 pb-10">
        @foreach ([1, 1, 1] as $product)
            <div class="relative w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow border-box">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Apple Watch Series 7 GPS,
                            Aluminium Case, Starlight Sport</h5>
                    </a>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-3xl font-bold text-gray-900">$599</span>
                        <a href="#"
                            class="target-button text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            data-product-id="1" data-modal-target="select-modal" data-modal-toggle="select-modal">Read
                            More</a>
                    </div>
                </div>
            </div>
        @endforeach
        <button type="button"
            class="text-white absolute mt-10 bottom-3 bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View
            More</button>
    </div>
</div>
<div class="relative">
    <h3 class="text-center mt-4 text-2xl font-bold">Prayer Beads</h3>
    <hr class="mt-3" />
    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-wrap justify-center gap-5 my-10 pb-10">
        @foreach ([1, 1, 1] as $product)
            <div class="relative w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow border-box">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Apple Watch Series 7 GPS,
                            Aluminium Case, Starlight Sport</h5>
                    </a>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-3xl font-bold text-gray-900">$599</span>
                        <a href="#"
                            class="target-button text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            data-product-id="1" data-modal-target="select-modal" data-modal-toggle="select-modal">Read
                            More</a>
                    </div>
                </div>
            </div>
        @endforeach
        <button type="button"
            class="text-white absolute mt-10 bottom-3 bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View
            More</button>
    </div>
</div>
<div class="relative">
    <h3 class="text-center mt-4 text-2xl font-bold">Lunar Monitor</h3>
    <hr class="mt-3" />
    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-wrap justify-center gap-5 my-10 pb-10">
        @foreach ([1, 1, 1] as $product)
            <div class="relative w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow border-box">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Apple Watch Series 7 GPS,
                            Aluminium Case, Starlight Sport</h5>
                    </a>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-3xl font-bold text-gray-900">$599</span>
                        <a href="#"
                            class="target-button text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            data-product-id="1" data-modal-target="select-modal" data-modal-toggle="select-modal">Read
                            More</a>
                    </div>
                </div>
            </div>
        @endforeach
        <button type="button"
            class="text-white absolute mt-10 bottom-3 bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View
            More</button>
    </div>
</div>
@section('scripts')
    @vite(['resources/js/app/product.js'])
@endsection
