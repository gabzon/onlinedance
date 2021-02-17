<nav class="space-y-1">
    <a href="{{ route('setting.main') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.main') ? 'bg-white text-gray-900':''}}">
        @include('icons.settings')
        <span class="ml-3 truncate">
            Default
        </span>
    </a>

    <a href="{{ route('setting.social') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.social') ? 'bg-white text-gray-900':''}}">
        @include('icons.social')
        <span class="ml-3 truncate">
            Social
        </span>
    </a>

    <a href="{{ route('setting.terms') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.terms') ? 'bg-white text-gray-900':''}}">
        @include('icons.terms')
        <span class="ml-3 truncate">
            Terms
        </span>
    </a>

    <a href="{{ route('setting.faq') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.faq') ? 'bg-white text-gray-900':''}}">
        @include('icons.question')
        <span class="ml-3 truncate">
            Faq
        </span>
    </a>

    <a href="{{ route('setting.billing') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.billing') ? 'bg-white text-gray-900':''}}"
        aria-current="page">
        @include('icons.credit-card')
        <span class="ml-3 truncate">
            Plan &amp; Billing
        </span>
    </a>

    <a href="{{ route('setting.seo') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.seo') ? 'bg-white text-gray-900':''}}">
        @include('icons.seo')
        <span class="ml-3 truncate">
            SEO
        </span>
    </a>

    <a href="{{ route('setting.design') }}"
        class="text-gray-800 hover:text-gray-700 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium {{ request()->routeIs('setting.design') ? 'bg-white text-gray-900':''}}">
        @include('icons.design')
        <span class="ml-3 truncate">
            Design
        </span>
    </a>
</nav>