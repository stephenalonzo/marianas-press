<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Marianas Press</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col min-h-screen justify-between">
    <header>
        <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div
                class="flex flex-wrap items-center justify-between lg:space-y-4 lg:justify-center xl:space-y-0 lg:space-x-4 xl:justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 lg:mt-3 xl:mt-0 rtl:space-x-reverse">
                    <img src="{{ asset('images/mp_logo.png') }}" class="h-8" alt="Marianas Press Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Marianas
                        Press</span>
                </a>
                <div class="flex lg:order-2 space-x-3 lg:space-x-3 lg:hidden rtl:space-x-reverse">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 lg:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0 hover:text-blue-700 transition">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/news"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                Pacific Mini Games
                            </a>
                        </li>
                        <li>
                            <a href="/news/sports"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                Sports
                            </a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">Special
                                Projects
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-4/5 mx-auto lg:w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">On
                                            Defense</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Flying
                                            Proas</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Beyond
                                            The Game</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Asia's
                                            Wellness Center</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MPOWERD
                                            Moment</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Marianas
                                            Islands Conservation Conference</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024
                                            Chamber Gala</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mai
                                            Teppanyaki at Crown Plaza</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                Classified Ads
                            </a>
                        </li>
                        <li>
                            <a href="/meet-the-team"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="/contact-us"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="/login"
                                class="block py-2 px-3 rounded-sm lg:bg-transparent lg:p-0  hover:text-blue-700 transition">
                                Log In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="w-full">
        {{ $slot }}
    </main>
    <footer class="mt-auto bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between text-center">
                <div class="mb-6 md:mb-0 flex items-center justify-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('images/mp_logo.png') }}" class="h-8 me-3" alt="Marianas Press Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Marianas
                            Press</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/" class="hover:underline">JVA's</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Surveys</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="text-center sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">©
                    {{ date('Y', strtotime(now())) }} <a href="/" class="hover:underline">Marianas
                        Press</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 justify-center sm:mt-0">
                    <a href="https://www.facebook.com/p/Marianas-Press-61568443177517/"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://www.instagram.com/marianaspress/?hl=en"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5" target="_blank">
                        <svg id="instagram" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                            viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                            xml:space="preserve">
                            <g>
                                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                                      c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                                      c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                                      c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                                <path
                                    d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                                      C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                                      c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                                      c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                                      C135.661,29.421,132.821,28.251,129.921,28.251z" />
                            </g>
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://www.youtube.com/@MarianasPress"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5" target="_blank">
                        <svg width="16px" height="16px" viewBox="0 0 32 32" id="icon"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <path
                                d="M29.41,9.26a3.5,3.5,0,0,0-2.47-2.47C24.76,6.2,16,6.2,16,6.2s-8.76,0-10.94.59A3.5,3.5,0,0,0,2.59,9.26,36.13,36.13,0,0,0,2,16a36.13,36.13,0,0,0,.59,6.74,3.5,3.5,0,0,0,2.47,2.47C7.24,25.8,16,25.8,16,25.8s8.76,0,10.94-.59a3.5,3.5,0,0,0,2.47-2.47A36.13,36.13,0,0,0,30,16,36.13,36.13,0,0,0,29.41,9.26ZM13.2,20.2V11.8L20.47,16Z" />
                            <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;"
                                class="cls-1" width="16" height="16" />
                        </svg>
                        <span class="sr-only">Youtube account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
