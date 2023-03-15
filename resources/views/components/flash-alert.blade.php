<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
    class="bg-indigo-300 py-1.5 text-center text-white flex justify-between px-3">
    <span>{{ $slot }}</span>
    <button class="text-bold" @click="show = false">X</button>
</div>
