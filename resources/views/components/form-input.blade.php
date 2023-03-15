@php
    $old = str_contains($attributes['name'], 'password') ? '' : old($attributes['name']);
@endphp

<div class="mb-4 flex flex-col gap-1">
    <label for="{{ $id }}" class="block text-bold text-gray-500">{{ $label }}</label>
    <input class="block w-full max-w-sm rounded border-2 px-2 py-2 outline-none focus:border-indigo-300 "
        type="{{ $type ?? 'text' }}" {{ $attributes }} value="{{ $old }}" />
    @error($attributes['name'])
        <p class="red text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>
