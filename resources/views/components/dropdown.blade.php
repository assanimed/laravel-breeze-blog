@props(['trigger'])

<div x-data="{ show: false }" @click.away="show=false" class=" relative w-full">


    <div @click="show= !show">
        {{ $trigger }}
    </div>


    <div x-show="show" class="absolute bg-gray-100 w-full rounded-md my-2 z-10 overflow-hidden overflow-y-auto max-h-48"
        style="display: none">

        {{ $slot }}
    </div>
</div>
