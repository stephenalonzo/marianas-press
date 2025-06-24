<x-main-layout>
    <div class="max-w-7xl mx-auto space-y-8 p-8">
        <h1 class="mb-4 text-4xl tracking-tight text-center font-extrabold text-gray-900 dark:text-white">
            {{ Route::currentRouteName() }}
        </h1>
        <div class="grid grid-cols-2 gap-8">
            @foreach ($sports as $sport)
                <div
                    class="flex items-center justify-between max-w-xl bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover rounded-t-lg md:h-48 md:w-full md:rounded-none md:rounded-s-lg"
                        src="{{ asset('images/mp_logo.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $sport->title }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ str_replace('&nbsp;', '', strip_tags(html_entity_decode(preg_replace('/(.*?[?!.](?=\s|$)).*/', '\1', $sport->description)))) }}
                        </p>
                        <div>
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
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $sports->links() }}
        </div>
    </div>
</x-main-layout>
