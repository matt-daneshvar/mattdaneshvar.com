<div class="mb-5">
    <h2 class="text-primary text-lg">
        {{ $title }}

        @if($current ?? false)
            <div class="bg-black inline-block px-2 rounded text-sm text-white">Now Reading</div>
        @endif
    </h2>

    @if($author ?? null)
        <h3>{{ $author }}</h3>
    @endif
</div>