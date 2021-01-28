<div class="block mb-6">
    <div class="flex flex-col">
        <div class="flex mb-0 items-center">
            <a href="https://{{ $url }}" target="_blank" class="border-0">
                <h3 class=" text-primary inline-block">{{ $name }}</h3>
            </a>
            <span class="mx-1 text-gray-500 hidden print:inline">·</span>
            <a href="https://{{ $url }}" target="_blank" class="text-gray-500 border-0 hidden print:inline">https://{{ $url }}</a>
        </div>
        <p class="text-gray-700 mb-2">{{ $description }}</p>

        <div class="text-sm">
            <span class=" inline-block">Role: </span>
            <span class="mb-2">{{ $role  }}</span>
        </div>

        <div class="text-sm">
            <span class=" inline-block">Stack: </span>
            <span class="">{{ collect($stack)->implode(', ')  }}</span>
        </div>
    </div>
</div>
