<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full text-left flex" style="    min-width: 9rem">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />

        </button>
    </x-slot>


    <x-dropdown-link href="/" :isActive="request()->routeIs('home')">
        All
    </x-dropdown-link>


    @foreach ($categories as $category)
        @php
            $isActive = request()->is("?category={$category->slug}");
            $r_Queries = http_build_query(request()->except('category'));
        @endphp
        <x-dropdown-link href="?category={{ $category->slug }}&{{ $r_Queries }}" :isActive='$isActive'>
            {{ ucwords($category->name) }}
        </x-dropdown-link>
    @endforeach

</x-dropdown>
