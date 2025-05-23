@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out hover:text-white'
            : 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium text-gray-600 hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
