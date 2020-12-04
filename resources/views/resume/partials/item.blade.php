<div class="mb-4">
    <h3 class="text-lg leading-tight text-primary mb-0">{{ $title ?? '' }}</h3>

    <div class="flex items-center">
        @if($organization ?? null)<p class="mb-0">{{ $organization }}</p>@endif

        @if(isset($period))
            <span class="mx-1 text-gray-500">·</span>
            <span class="text-gray-500">{{ $period }}</span>
        @endif
    </div>

    <div>
        {{ $slot ?? '' }}
    </div>
</div>
