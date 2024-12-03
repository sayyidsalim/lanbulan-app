<form class="max-w-md mx-auto flex flex-col gap-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
    <input type="text" id="name" aria-describedby="helper-text-explanation"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="Your Name">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" aria-describedby="helper-text-explanation"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="name@gmail.com">
    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
    <input type="text" id="subject" aria-describedby="helper-text-explanation"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="Your Subject">

    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
        message</label>
    <textarea id="message" rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Write your thoughts here..."></textarea>

    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your
        details. Read our <a href="#"
            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
    <button type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Send</button>
</form>