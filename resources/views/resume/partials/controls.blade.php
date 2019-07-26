<nav class="flex justify-center print:hidden">
    <div>
        @if(request()->has('long'))
            <a href="/resume">Long story</a> <a href="/resume" class="border-0">
                <del>short</del>
            </a>
        @else
            <a href="/resume?long" class="border-0">
                <del>Long story</del>
            </a> <a href="/resume?long">short</a>
        @endif
    </div>

    <a class="ml-10" href="/resume/pdf" data-turbolinks="false">Save as PDF</a>
</nav>