@if ($posts->hasPages())
        <div class="flex mx-auto mt-5">
            <!-- Previous Button -->
            <div class="flex">
                <!-- Previous Button -->
                @if ($posts->onFirstPage())
                    <span
                        class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 hover:text-white bg-red-700 text-white">
                        <svg class="w-4 h-4 text-gray-800 text-white mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Previous
                    </span>
                @else
                    <a href="{{ $posts->previousPageUrl() }}"
                        class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 hover:text-white bg-red-700 text-white">
                        <svg class="w-4 h-4 text-gray-800 text-white mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Previous
                    </a>
                @endif

                <!-- Next Button -->
                @if ($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}"
                        class="flex items-center justify-center px-4 h-10 ms-3 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 text-black bg-red-700 text-white ">
                        Next
                        <svg class="w-3 h-3 text-gray-800 text-white ml-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                @else
                    <span
                        class="flex items-center justify-center px-4 h-10 ms-3 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 text-black bg-red-700 text-white ">
                        Next
                        <svg class="w-3 h-3 text-gray-800 text-white ml-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    @endif