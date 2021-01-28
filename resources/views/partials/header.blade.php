<header class="border-b top-0 left-0 w-full leading-tight print:fixed">
    <div class="container max-w-2xl mx-auto py-6 flex items-center justify-center print:justify-start">
        <div>
            <div>
                <a href="/" class="border-0">Matt Daneshvar</a>

                @if(view()->hasSection('title'))
                    <span class="text-gray-500">/</span>
                    <h1 class="inline text-base">
                        @yield('title')
                    </h1>
                @endif
            </div>
            @yield('header.subtitle')
        </div>

        @yield('header.append')
    </div>
</header>

<div class="print:h-24"></div>
