<div class="flex mb-5">
    <div>
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

    @if($star ?? false)
        <div class="ml-auto text-primary">★</div>
    @endif
</div>