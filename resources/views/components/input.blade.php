@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-sky-600 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-sky-600 dark:focus:border-indigo-600 focus:ring-sky-500 dark:focus:ring-indigo-600  shadow-sm']) !!}>
