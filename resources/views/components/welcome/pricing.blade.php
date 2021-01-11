<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="relative">

        <!--
        Mobile menu, show/hide based on mobile menu state.
  
        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg"
                                alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Analytics
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: cursor-click -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Engagement
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Security
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: view-grid -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Integrations
                                </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: refresh -->
                                <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Automations
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Pricing
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Docs
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Enterprise
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Blog
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Help Center
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Guides
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Security
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Events
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                            Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing customer?
                            <a href="#" class="text-blue-600 hover:text-blue-500">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-b from-blue-50 via-white to-white">
        <!-- Pricing section with single price and feature list -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="pb-16 xl:flex xl:items-center xl:justify-between">
                <div>
                    <h1 class="text-4xl font-extrabold sm:text-5xl sm:tracking-tight">
                        <span class="text-gray-900">Everything you need for </span>
                        <span class="text-blue-600">$99 a month</span>
                    </h1>
                    <p class="mt-5 text-xl text-gray-500">Includes every feature we offer plus unlimited projects and
                        unlimited users.</p>
                </div>
                <a href="#"
                    class="mt-8 w-full bg-blue-600 border border-transparent rounded-md py-3 px-5 inline-flex items-center justify-center text-base font-medium text-white hover:bg-blue-700 sm:mt-10 sm:w-auto xl:mt-0">Get
                    started today</a>
            </div>
            <div class="border-t border-gray-200 pt-16 xl:grid xl:grid-cols-3 xl:gap-x-8">
                <div>
                    <h2 class="text-base font-semibold text-blue-600 uppercase tracking-wide">Everything you need</h2>
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

    <!-- Branded FAQ -->
    <div class="bg-blue-900">
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
                        <dd class="mt-2 text-base text-blue-200">
                            I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why do you never see elephants hiding in trees?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200">
                            Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            How do you make holy water?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why can&#039;t you hear a pterodactyl go to the bathroom?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200">
                            Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            cupiditate laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            What do you call someone with no body and no nose?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200">
                            Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate
                            laboriosam fugiat.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-white">
                            Why did the invisible man turn down the job offer?
                        </dt>
                        <dd class="mt-2 text-base text-blue-200">
                            He couldn&#039;t see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- CTA section -->
    <div class="bg-blue-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-blue-900 sm:text-4xl">
                <span class="block">Ready to dive in?</span>
                <span class="block text-blue-600">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="bg-blue-600 border border-transparent rounded-md py-3 px-5 inline-flex items-center justify-center text-base font-medium text-white hover:bg-blue-700">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>