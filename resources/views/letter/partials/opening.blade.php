<div class="mb-8">
    <p class="mb-2">
        Dear {{ $recipient ?? 'Hiring Manager' }},
    </p>

    <p class="mb-2">
        I am writing to express my interest in the
        <span class="text-primary">{{ $position }}</span> opening at
        <span class="text-primary">{{ $organization }}</span> as advertised on
        <a href="{{ $link }}">{{ $platform }}</a>.
    </p>
</div>
