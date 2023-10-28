@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-gray-900 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-900 focus:outline-none focus:border-gray-900 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-900 dark:text-gray-400 hover:text-amber-200 dark:hover:text-gray-300 hover:border-amber-200 dark:hover:border-gray-700 focus:outline-none focus:text-amber-200 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
