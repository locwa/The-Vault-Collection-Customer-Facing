<x-app-layout>
    <x-slot:title>
        Modern, Vintage & Exotic Cars
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

    <div class="my-20 md:flex flex-col items-center">
        <h1 class="text-[4rem] tracking-wider font-semibold mb-20">FEATURED GALLERY</h1>
        <div class="md:flex h-[75vh] w-full gap-10 justify-center">
            <img src="./storage/home_photos/collage-0.webp" alt="car">
            <div class="h-full flex gap-2">
                <div class="flex gap-10 w-full">
                    <div class="h-[70vh] w-[30vw]">
                        <img class="h-3/5 w-full mb-11 object-cover" src="./storage/home_photos/collage-1.webp" alt="car">
                        <img class="h-2/5 w-full object-cover" src="./storage/home_photos/collage-2.webp" alt="car">
                    </div>
                    <div class="h-[70vh]">
                        <img class="h-3/5 w-full mb-11 object-cover" src="./storage/home_photos/collage-3.webp" alt="car">
                        <img class="h-2/5 w-full object-cover" src="./storage/home_photos/collage-4.webp" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 bg-black dark:bg-gray-100 text-gray-100 dark:text-black text-center">
        <h1 class="text-5xl pb-14 font-semibold">WHAT OUR CLIENTS SAY ABOUT US</h1>
        <div class="flex justify-center">
            <x-review-container reviewerName="- Michael Rossi">
                "The Vault's exotic car selection is unmatched!  Rare finds and knowledgeable staff make it a must-visit for any enthusiast."
            </x-review-container>
            <x-review-container reviewerName="- Isabela Rodriguez">
                "Buying my McLaren from The Vault was a dream.  Exceptional service and a personalized experience made it truly special."
            </x-review-container>
            <x-review-container reviewerName="- David Chen">
                "The Vault's service department is top-notch.  Expert technicians and efficient repairs keep my Lamborghini running perfectly."
            </x-review-container>
            <x-review-container reviewerName="- Emily Carter">
                "The Vault's showroom is stunning.  A true temple of automotive art, creating an unforgettable experience."
            </x-review-container>
            <x-review-container reviewerName="- Robert Johnson">
                "I appreciated The Vault's transparency.  Honest pricing and a straightforward process made my purchase stress-free."
            </x-review-container>
        </div>
    </div>

</x-app-layout>
