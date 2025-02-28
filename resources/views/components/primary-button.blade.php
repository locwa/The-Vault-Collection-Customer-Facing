@props([
   'inverted' => false,
   'size' => 'md'
])

@php
    $colors = "";
    if ($inverted){
        $colors = 'dark:bg-[#0f0f0f] bg-gray-100 dark:text-white text-[#0f0f0f] dark:hover:bg-gray-700 hover:bg-white dark:focus:bg-gray-700 focus:bg-white dark:active:bg-gray-900 active:bg-gray-300 dark:focus:ring-offset-2 focus:ring-offset-gray-800 border-white';
    } else {
        $colors = 'bg-[#0f0f0f] dark:bg-gray-100 text-white dark:text-[#0f0f0f] hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:ring-offset-2 dark:focus:ring-offset-gray-800';
    }

    $padding = "";
    switch($size){
        case 'lg':
            $padding = "px-8 py-4";
            break;
        case 'md':
            $padding = "px-4 py-2";
            break;
        case 'sm':
            $padding = "px-2 py-1";
            break;
    }
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center '. $padding .' '. $colors .' border border-transparent rounded-[20px] font-semibold text-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
