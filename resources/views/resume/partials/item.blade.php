<div style="">
    @if($period ?? null)<small class="text-gray-500">{{ $period }}</small>@endif
    <h3 class="text-primary text-lg">{{ $title ?? '' }}</h3>
    @if($organization ?? null)<p>{{ $organization }}</p>@endif

    {{ $slot ?? '' }}
</div>
