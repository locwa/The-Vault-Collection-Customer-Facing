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

    <hr class="border-black dark:border-gray-100 mx-32">

    <div class="mx-72 my-20 text-center">
        <p class="text-3xl">"In a segment often characterized by inflated egos and high-pressure tactics, The Vault Collection offers a more refined and customer-centric approach.  They understand that purchasing an exotic car is more than just a transaction; it's the realization of a dream.  Apex facilitates that dream with a level of polish and professionalism that earns them a strong recommendation.  For those navigating the often-turbulent waters of exotic car acquisition, The Vault Collection provides a welcome port in the storm".</p>
        <p class="text-2xl font-light mt-8">Arthur Sterling</p>
    </div>

    <hr class="border-black dark:border-gray-100 mx-32">

</x-app-layout>
