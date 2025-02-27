<footer class="py-4 px-24 justify-center">
    <div class="flex justify-between py-20">
        <div class="flex-col items-center hidden md:flex">
            <a href="{{route('home')}}">
                <x-logos.crest class="h-auto w-44 pb-5"></x-logos.crest>
            </a>
        </div>
        <div class="flex gap-20">
            <div class="flex flex-col gap-y-5">
                <x-nav-link href="{{route('inventory')}}">Inventory</x-nav-link>
                <x-nav-link href="{{route('services')}}">Services</x-nav-link>
                <x-nav-link href="{{route('about')}}">About</x-nav-link>
                <x-nav-link href="{{route('contact')}}">Contact</x-nav-link>
            </div>
            <div class="flex flex-col gap-y-4 font-light">
                <x-nav-link href="./">YouTube</x-nav-link>
                <x-nav-link href="./">Instagram</x-nav-link>
                <x-nav-link href="./">LinkedIn</x-nav-link>
            </div>
        </div>
    </div>
    <p class="text-sm text-center">statements here</p>
</footer>
