<x-main-layout>
    @section('title', 'Home')
    <section
        class="bg-center bg-no-repeat bg-cover bg-gray-500 bg-blend-multiply bg-[url('https://miro.medium.com/v2/resize:fit:1400/1*nj76Hs3RYoUcW38-LyonlQ.jpeg')]">
        <div class="px-4 py-8 md:p-16 mx-auto max-w-screen-xl text-center">
            {{-- @unless (empty($latest))
                <a href="/news/{{ $latest->slug }}"
                    class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                    <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">Today's Newest Story</span>
                    <span class="text-sm font-medium">{{ $latest->title }}</span>
                    <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            @else
            @endunless --}}
            <h1
                class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">
                Striving to inform the public with deeply reported multimedia content focused on the issues that matter.
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                The mission of Marianas Press
                is to provide useful multimedia news reports for the community. We aim to build a stronger sense of
                community by reaching diverse audiences and provide in-depth and original multimedia reporting for
                underrepresented communities and issues.</p>
            <form class="w-full max-w-md mx-auto">
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email
                    sign-up</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="email" id="default-email"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Subscribe to daily news!" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                        up</button>
                </div>
            </form>
        </div>
    </section>
    <main class="p-8">
        <section class="space-y-8">
            <div class="max-w-7xl mx-auto space-y-6">
                <div class="flex items-center space-x-4">
                    <h3 class="text-3xl font-bold tracking-tight text-left">Latest News</h3>
                    <span>
                        <a href="/news" class="text-blue-700 underline underline-offset-2">More &rarr;</a>
                    </span>
                </div>
                <div class="relative grid md:grid-cols-2 gap-8 lg:grid-cols-3">
                    @unless (count($reports) == 0)
                        @foreach ($reports as $report)
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg object-none w-full h-48"
                                        src="{{ asset('images/mp_logo.png') }}" alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="space-y-2">
                                        <a href="/news/{{ $report->slug }}">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $report->title }}</h5>
                                        </a>
                                        <p class="text-sm text-gray-500">
                                            {{ date('F d, Y', strtotime($report->created_at)) }}
                                        </p>
                                    </div>
                                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ str_replace('&nbsp;', '', strip_tags(html_entity_decode(preg_replace('/(.*?[?!.](?=\s|$)).*/', '\1', $report->description)))) . '...' }}
                                    </p>
                                    <a href="/news/{{ $report->slug }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No news found.</p>
                    @endunless
                </div>
            </div>
            <div class="max-w-7xl mx-auto space-y-6">
                <div class="flex items-center space-x-4">
                    <h3 class="text-3xl font-bold tracking-tight text-left">Sports</h3>
                    <span>
                        <a href="/news/sports" class="text-blue-700 underline underline-offset-2">More &rarr;</a>
                    </span>
                </div>
                <div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3">
                    @unless (count($sports) == 0)
                        @foreach ($sports as $sport)
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg object-none w-full h-48"
                                        src="{{ asset('images/mp_logo.png') }}" alt="" />
                                </a>
                                <div class="p-5">
                                    <div class="space-y-2">
                                        <a href="/news/{{ $sport->slug }}">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $sport->title }}</h5>
                                        </a>
                                        <p class="text-sm text-gray-500">
                                            {{ date('F d, Y', strtotime($sport->created_at)) }}
                                        </p>
                                    </div>
                                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ str_replace('&nbsp;', '', strip_tags(html_entity_decode(preg_replace('/(.*?[?!.](?=\s|$)).*/', '\1', $sport->description)))) . '...' }}
                                    </p>
                                    <a href="/news/{{ $sport->slug }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No news for sports found.</p>
                    @endunless
                </div>
            </div>
        </section>
    </main>

</x-main-layout>
