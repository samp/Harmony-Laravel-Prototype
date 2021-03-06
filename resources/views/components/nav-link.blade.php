@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-purple-600 text-xl leading-12 text-gray-900 dark:text-white focus:outline-none focus:border-purple-900 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-xl leading-12 text-gray-500 dark:text-white hover:text-gray-700 dark:hover:text-truegray-200 hover:border-purple-600 focus:outline-none focus:text-gray-700 focus:border-purple-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
