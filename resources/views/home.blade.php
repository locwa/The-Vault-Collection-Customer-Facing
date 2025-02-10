<x-app-layout>
    <x-slot:title>
        Modern, Vintage & Exotic Cars | The Vault
    </x-slot:title>
    <x-image-carousel photoFileHeader="home_photos/hero-carousel-" :photoCount="5" carInfo="header_images">
        <x-slot:heading>
            <h1 class="text-5xl/[3.5rem] max-w-[60vw]">The Vault. Purveyors of some of the most exclusive cars in the planet.</h1>
        </x-slot:heading>
        <x-slot:details>
            <p class="text-md font-light max-w-[15vw] text-right">Since our inception, we have sourced, procured, and sold over 500 of the most exclusive supercars and hypercars in the entire world.</p>
        </x-slot:details>
    </x-image-carousel>
</x-app-layout>
