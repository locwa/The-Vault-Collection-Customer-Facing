@props([
    'textSize' => 'lg',
])

<a {{ $attributes->merge(['class' => 'text-[#0f0f0f] text-'.$textSize.' dark:text-gray-100 hover:text-gray-500 hover:cursor-pointer']) }}> {{ $slot }}</a>
