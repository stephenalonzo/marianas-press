<x-main-layout>
    @section('title', 'About Us')
    <section class="bg-white dark:bg-gray-900">
        <div class="grid grid-cols-3 gap-6 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="flex flex-col mx-auto items-center justify-start space-y-12 max-w-3xl">
                @foreach ($members as $member)
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('images/mp_logo.png') }}"
                            alt="{{ $member->name }}">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">{{ $member->name }}</a>
                        </h3>
                        <p>Correspondent</p>
                    </div>
                @endforeach
            </div>
            <div class="col-span-2 text-start">
                <div class="mx-auto mb-8 lg:mb-16">
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        {{ Route::currentRouteName() }}</h1>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        Marianas Press, or MP, was established in November 2024, born out of the dream of its
                        founder,
                        Thomas Mangloña II, to form a truly independent multimedia news outlet in his home islands.
                        MP aims
                        to deliver timely digital news about the Commonwealth of the Northern Mariana Islands
                        (CNMI), the
                        Pacific, and beyond.

                        MP strives to inform the public with deeply reported multimedia content focused on the
                        issues that
                        matter. In a world of fake news, misinformation, and disinformation, MP hopes to quiet the
                        noise
                        surrounding current events to deliver the truth and hold those in power accountable.

                        Local news matters and MP hopes to help every voice find its story.
                    </p>
                </div>
                <div class="mx-auto mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                        Mission</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">The mission of Marianas Press
                        is to
                        provide useful multimedia news reports for the community. We aim to build a stronger sense
                        of
                        community by reaching diverse audiences and provide in-depth and original multimedia
                        reporting for
                        underrepresented communities and issues. By approaching stories holistically, we work
                        towards
                        pushing the boundaries of traditional media. </p>
                </div>
                <div class="mx-auto mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Values
                    </h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Marianas Press values its
                        independence
                        and is committed to transparency, accountability, and integrity. Transparency allows the
                        community
                        to witness firsthand how its government and institutions make decisions that impact their
                        daily
                        lives. Accountability ensures that when there is wrongdoing, it is brought to light and
                        corrected.
                        Integrity is the foundation of our reporting in pursuit of the truth. A robust and
                        independent press
                        is critical to a thriving democracy.</p>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
