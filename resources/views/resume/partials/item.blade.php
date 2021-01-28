<div class="mb-4">
    <h3 class="text-lg leading-tight text-primary mb-0">{{ $title ?? '' }}</h3>

    <div class="flex flex-col sm:flex-row sm:items-center print:flex-row print:items-center">
        @if($organization ?? null)<p class="mb-0">{{ $organization }}</p>@endif

        @if(isset($period))
            <span class="mx-1 text-gray-500 hidden sm:inline print:block">·</span>
            <span class="text-gray-500">{{ $period }}</span>
        @endif
    </div>

    <div>
        {{ $slot ?? '' }}
    </div>
</div>
