<div class="container w-full p-10 flex flex-col md:flex-row lg:flex-row flex-wrap gap-5">
@foreach ([1,1,1,1,1,1,1,1,1] as $blog )
<div class="max-w-sm border border-gray-200 rounded-lg shadow bg-white mt-5">
    <a href="#">
        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-black">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="/single" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:outline-none bg-red-700 ">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>    
@endforeach


<div class="flex mx-auto">
    <!-- Previous Button -->
  <div class="flex">
    <!-- Previous Button -->
    <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 hover:text-white bg-red-700 text-white">
        <svg class="w-4 h-4 text-gray-800 text-white mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
        </svg>
      Previous
    </a>
  
    <!-- Next Button -->
    <a href="#" class="flex items-center justify-center px-4 h-10 ms-3 text-base font-medium text-gray-500 border border-gray-300 rounded-lg hover:bg-blue-700 text-black bg-red-700 text-white ">
      Next 
      <svg class="w-3 h-3 text-gray-800 text-white ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
    </a>
  </div>
  
</div>
