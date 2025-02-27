<nav class="py-4 px-2 md:px-10 flex justify-between items-center sticky top-0 bg-gray-100 dark:bg-[#0f0f0f]">

    <a href="{{route('home')}}" class="flex">
        <x-logos.crest class="h-auto w-16 mr-4"></x-logos.crest>
        <x-logos.logo class="h-auto w-48"></x-logos.logo>
    </a>
    <div class="hidden md:flex gap-10 ">
        <x-nav-link href="{{route('inventory')}}">Inventory</x-nav-link>
        <x-nav-link href="{{route('services')}}">Services</x-nav-link>
        <x-nav-link href="{{route('about')}}">About</x-nav-link>
        <x-nav-link href="{{route('contact')}}">Contact</x-nav-link>
    </div>

    <!-- Dropdown for mobile -->
    <div class="flex md:hidden">
        <p>Menu</p>
        <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
        </svg>
    </div>

</nav>

<div class="flex flex-col sticky top-24 p-4 bg-gray-100 dark:bg-[#0f0f0f]">
    <x-nav-link href="{{route('inventory')}}" textSize="2xl">Inventory</x-nav-link>
    <x-nav-link href="{{route('services')}}">Services</x-nav-link>
    <x-nav-link href="{{route('about')}}">About</x-nav-link>
    <x-nav-link href="{{route('contact')}}">Contact</x-nav-link>
</div>
