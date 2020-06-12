<a href="https://{{ $url }}"
        class="group border p-5 mb-3 flex items-center border-gray-300 hover:border-red-800 duration-200 transition-all"
   target="_blank">
    <div>
        <div class="flex mb-2 items-center">
            <h3 class="text-xl font-bold">{{ $name }}</h3>
            @if(isset($role))
                <span class="mx-1 text-gray-300">·</span>
                <span class="">{{ $role  }}</span>
            @endif
        </div>
        @if($description ?? null)
            <p class="text-gray-700 mt-1">{{ $description }}</p>
        @endif

        <div class="ml-auto border-gray-100 text-gray-500">{{ $url }}</div>
    </div>
    <div class="ml-auto text-red-800 pl-5">
        <div data-feather="chevron-right" class="transition-all duration-200 transform group-hover:translate-x-2">&gt;</div>
    </div>
</a>