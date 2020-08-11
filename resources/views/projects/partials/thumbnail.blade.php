<div class="w-full px-1 mb-2 flex sm:w-1/2" style="min-height: 12rem">
    <a href="https://{{ $url }}"
       class="group w-full border p-5 flex border-gray-300 hover:border-red-800 duration-200 transition-all"
       target="_blank">
        <div class="flex flex-col">
            <div class="flex mb-2 items-center">
                <h3 class="text-lg font-bold">{{ $name }}</h3>
                @if(isset($role))
                    <span class="mx-1 text-gray-300">·</span>
                    <span class="">{{ $role  }}</span>
                @endif
            </div>
            @if($description ?? null)
                <p class="text-gray-700 mt-1">{{ $description }}</p>
            @endif

            <div class="mt-auto text-sm border-gray-100 text-gray-500">{{ $url }}</div>
        </div>
        <div class="ml-auto mt-auto text-red-800 pl-1">
            <div data-feather="chevron-right" class="transition-all duration-200 transform group-hover:translate-x-2">&gt;</div>
        </div>
    </a>
</div>
