<header class="border-b text-center top-0 left-0 w-full print:fixed">
    <div class="container mx-auto py-6">
        <a href="/" class="border-0">Matt Daneshvar</a>
        @if(view()->hasSection('title'))
            <span class="text-gray-500">/</span>
            <h1 class="inline text-base">
                @yield('title')
            </h1>
        @endif
    </div>
</header>

<div class="print:h-20"></div>
