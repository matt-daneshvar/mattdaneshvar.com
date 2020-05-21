<div class="mb-5">
    <h3 class="text-xl leading-tight font-bold">{{ $name }}</h3>
    <a href="https://{{ $url }}" target="_blank">{{ $url }}</a>
    @if($description ?? null)
        <p class="text-gray-500 mt-1">{{ $description }}</p>
    @endif
</div>