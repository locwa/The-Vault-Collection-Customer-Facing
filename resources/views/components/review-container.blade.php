@props([
    'reviewerName',
])

<div {{ $attributes->merge(['class' => 'w-80 h-[40vh] md:h-64 px-8 py-4 flex flex-wrap content-between justify-center border-r-[1px] border-black']) }}>
    <p class="text-lg">{{ $slot }}</p>
    <p class="text-lg font-light">{{ $reviewerName }}</p>
</div>
