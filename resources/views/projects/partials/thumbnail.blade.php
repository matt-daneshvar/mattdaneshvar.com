<div class="block mb-6">
    <div class="flex flex-col">
        <div class="flex mb-0 items-center">
            <a href="https://{{ $url }}" target="_blank" class="border-0">
                <h3 class=" text-primary inline-block">{{ $name }}</h3>
            </a>
            @if(isset($role))
                <span class="mx-1 text-gray-300">·</span>
                <span class="text-gray-500 text-sm">{{ $role  }}</span>
            @endif
        </div>
        @if($description ?? null)
            <p class="text-gray-700">{{ $description }}</p>
        @endif
    </div>
    <div class="ml-auto mt-auto text-red-800 pl-1">

    </div>
</div>
