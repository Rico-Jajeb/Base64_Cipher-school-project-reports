<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <title>Base64 Cipher</title>
</head>
<body class="bg-gray-100 dark:bg-gray-900" >
    <section class="flex flex-row-reverse">
        <button id="theme-toggle" type="button" class="text-gray-500 mr-4 mt-2 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
    </section>
    <section class="flex  justify-center  items-center h-screen ">
        <div class="flex flex-col justify-center  items-center h-screen">
            <h1 class="text-3xl text-black dark:text-white text-center smpl mb-3" id="smpl">Base64 Cipher</h1>
            <textarea data-tooltip-target="tooltip-default2" name="textInput" id=""  cols="10" rows="10" class="w-72 h-12 p-2 rounded mt-4 focus:outline-none focus:border-teal-300 focus:ring-teal-300 focus:ring-2 shadow-md focus:shadow-teal-300/90" placeholder="Input..."></textarea> 
            <span class="flex gap-2">
                <button class="Encrypt w-28 mt-4  rounded-md  border border-black dark:border-white text-black dark:text-white">Encrypt</button>
                <button class="Encrypt w-28 mt-4  rounded-md  border border-black dark:border-white text-black dark:text-white">Decrypt</button>
            </span>
            <textarea data-tooltip-target="tooltip-default" name="" id="" cols="10" rows="10" class="w-80 h-16 p-3 rounded mt-4 focus:outline-none focus:border-teal-300 focus:ring-teal-300 focus:ring-2 shadow-md focus:shadow-teal-300/90"  placeholder="Output..."></textarea> 
            <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-black transition-opacity duration-300 bg-gray-100 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-100">
                Cipher Text
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>            
            <div id="tooltip-default2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-black transition-opacity duration-300 bg-gray-100 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-100">
                Plain Text
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </section>

<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

{{-- @vite('resources/css/app.css')

<input type="text" class="border border-gray-300 focus:border-blue-500" />
<textarea class="border border-gray-300 focus:border-blue-500"></textarea>
<input type="email" name="email" class="  focus:outline-none focus:border-sky-500 focus:ring-sky-500     focus:ring-1" placeholder="you@example.com" /> --}}