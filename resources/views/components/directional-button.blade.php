@props([
    'position' => 'right',
])

<button {{ $attributes->merge(['class' => 'mx-2 my-auto h-14 w-14 flex items-center justify-center    p-4 tracking-widest border-2 border-white rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    @if($position === "right")
        <x-logos.right-arrow        ></x-logos.right-arrow>
    @else
        <x-logos.left-arrow></x-logos.left-arrow>
    @endif
</button>
