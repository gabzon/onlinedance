<div class="bg-white">

    <div class="bg-gradient-to-b from-white via-white to-blue-50 dark:from-white dark:via-white dark:to-red-50">
        <!-- Pricing section with single price and feature list -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="pb-16 xl:flex xl:items-center xl:justify-between">
                <div>
                    <h1 class="text-4xl font-extrabold sm:text-5xl sm:tracking-tight">
                        <span class="text-gray-900">
                            {{ config('services.school.name') == 'dancefloor' ? 'All our classes for only':'Everything you need for' }}
                        </span>
                        <span class="text-blue-600 dark:text-red-600">
                            {{ config('settings.currency') == 'EUR' ? '€':'$' }}
                            {{ config('settings.monthly_price')}} a month
                        </span>
                    </h1>
                    <p class="mt-5 text-xl text-gray-500">
                        {{ config('services.school.name') == 'dancefloor' ? 'Access all our classes and new videos each month - Learn & Have Fun!':'Includes every feature we offer plus unlimited projects and unlimited users.' }}
                    </p>
                </div>
                <a href="{{ route('register') }}"
                    class="mt-8 w-full bg-blue-600 dark:bg-red-600 dark:hover:bg-red-700 border border-transparent rounded-md py-3 px-5 inline-flex items-center justify-center text-base font-medium text-white hover:bg-blue-700 sm:mt-10 sm:w-auto xl:mt-0">
                    {{ config('services.school.name') == 'dancefloor' ? '7 Day Free Trial':'Get started today' }}
                </a>
            </div>
            <div class="border-t border-gray-200 pt-16 xl:grid xl:grid-cols-3 xl:gap-x-8">
                <div>
                    <h2 class="text-base font-semibold text-blue-600 uppercase tracking-wide dark:text-red-600">
                        Everything you need</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900">All-in-one platform</p>
                    <p class="mt-4 text-lg text-gray-500">Ac euismod vel sit maecenas id pellentesque eu sed
                        consectetur. Malesuada adipiscing sagittis vel nulla nec. Urna, sed a lectus elementum blandit
                        et.</p>
                </div>
                <div class="mt-4 sm:mt-8 md:mt-10 md:grid md:grid-cols-2 md:gap-x-8 xl:mt-0 xl:col-span-2">
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4 flex md:py-0 md:pb-4">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Vitae in pulvinar odio id utobortis in
                                inter.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Sed sed id viverra viverra augue eget
                                massa.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Urna, gravida amet, a, integer venenatis.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Lobortis sed pharetra amet vitae eleifend.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Ullamcorper blandit a consequat donec elit
                                aoreet.</span>
                        </li>
                    </ul>
                    <ul class="border-t border-gray-200 divide-y divide-gray-200 md:border-t-0">
                        <li class="py-4 flex md:border-t-0 md:py-0 md:pb-4">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Vitae in pulvinar odio id utobortis in
                                inter.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Sed sed id viverra viverra augue eget
                                massa.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Urna, gravida amet, a, integer venenatis.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Lobortis sed pharetra amet vitae eleifend.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Ullamcorper blandit a consequat donec elit
                                aoreet.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @if (config('services.school.name') != 'dancefloor')
    <!-- Branded FAQ -->
    <div class="bg-blue-900 dark:bg-red-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white">
                Frequently asked questions
            </h2>
            <div class="mt-6 border-t border-blue-400 border-opacity-25 pt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            What&#039;s the best thing about Switzerland?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why do you never see elephants hiding in trees?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            How do you make holy water?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why can&#039;t you hear a pterodactyl go to the bathroom?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            What do you call someone with no body and no nose?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate
                            laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why did the invisible man turn down the job offer?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200 dark:text-red-200">
                            He couldn&#039;t see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    @endif

    <!-- CTA section -->
    <div class="bg-blue-50 dark:bg-red-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-blue-900 sm:text-4xl dark:text-red-900">
                <span class="block">Ready to dive in?</span>
                <span class="block text-blue-600 dark:text-red-600">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 dark:bg-red-600 dark:hover:bg-red-700 border border-transparent rounded-md py-3 px-5 inline-flex items-center justify-center text-base font-medium text-white hover:bg-blue-700">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>