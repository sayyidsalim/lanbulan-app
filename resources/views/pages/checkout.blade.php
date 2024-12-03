@extends('main')
@section('title', 'Checkout')
@section('content')
    <div class="warraper">
        <x-heading class="pt-4 semi-bold text-center">Checkout</x-heading>
        <hr class="h-px my-2" />

        <div class="bg-gray-50 min-h-screen flex items-center justify-center">
            <div class="container mx-auto px-4 py-8 max-w-5xl bg-white shadow-lg rounded-lg">

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Product Details -->
                    <div class="col-span-2">
                        <h2 class="text-xl font-semibold mb-4 text-gray-700">Order Summary</h2>
                        <div class="space-y-4">
                            <!-- Product Item -->
                            <div class="flex items-center border-b border-gray-200 pb-4">
                                <img src="https://via.placeholder.com/100" alt="Product Image"
                                    class="w-20 h-20 rounded-lg object-cover" />
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg font-medium text-gray-800">Product Name 1</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam quidem sunt voluptatem
                                        corrupti quo ex sequi pariatur labore veritatis. Est beatae quidem natus quas
                                        ratione minima dignissimos temporibus et hic.</p>
                                    <p class="text-sm text-gray-600">Size: Medium</p>
                                    <p class="text-sm text-gray-600">Color: Black</p>
                                </div>
                                <p class="text-lg font-semibold text-gray-800">$49.99</p>
                            </div>

                            <!-- Another Product Item -->
                            <div class="flex items-center border-b border-gray-200 pb-4">
                                <img src="https://via.placeholder.com/100" alt="Product Image"
                                    class="w-20 h-20 rounded-lg object-cover" />
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg font-medium text-gray-800">Product Name 2</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, non, mollitia sequi id
                                        quas provident ipsam vero quibusdam blanditiis fugit, labore maxime cupiditate
                                        facilis necessitatibus voluptas reprehenderit inventore perspiciatis ea!</p>
                                    <p class="text-sm text-gray-600">Size: Large</p>
                                    <p class="text-sm text-gray-600">Color: Blue</p>
                                </div>
                                <p class="text-lg font-semibold text-gray-800">$29.99</p>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="mt-6">
                            <div class="flex justify-between items-center text-lg font-semibold">
                                <span>Total:</span>
                                <span>$79.98</span>
                            </div>
                        </div>
                    </div>

                    <!-- Billing & Payment Details -->
                    <div>
                        <h2 class="text-xl font-semibold mb-4 text-gray-700">Billing Details</h2>
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
                                <input type="text"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                    placeholder="John Doe" />
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Email Address</label>
                                <input type="email"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                    placeholder="you@example.com" />
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Address</label>
                                <input type="text"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                    placeholder="1234 Street, City" />
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">City</label>
                                    <input type="text"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                        placeholder="City" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ZIP Code</label>
                                    <input type="text"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                        placeholder="12345" />
                                </div>
                            </div>

                            <h2 class="text-xl font-semibold mb-4 text-gray-700">Payment Information</h2>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Card Number</label>
                                <input type="text"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                    placeholder="1234 5678 9012 3456" />
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Expiration Date</label>
                                    <input type="text"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                        placeholder="MM/YY" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">CVV</label>
                                    <input type="text"
                                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none px-4 py-2"
                                        placeholder="123" />
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-red-700 transition duration-300">
                                Confirm Order
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
