@props(['isActive' => false])

{{-- @dd($isActive) --}}

@php
    $classes = 'block text-left px-3 py-1 text-sm leading-6 hover:bg-indigo-300 hover:text-white focus:bg-indigo-300 focus:text-white ';
    
    $classes .= $isActive ? ' bg-indigo-300 text-white' : '';
    
@endphp


<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
