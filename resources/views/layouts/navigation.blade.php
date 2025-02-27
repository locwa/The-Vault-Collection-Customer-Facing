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
</nav>
