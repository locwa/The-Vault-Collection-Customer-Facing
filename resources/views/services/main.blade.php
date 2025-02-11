<x-app-layout>

    <x-slot:title>Services | CarzCo</x-slot:title>

    <div class="flex justify-between items-center px-24 py-10">
        <h1 class="text-[5rem]">Services</h1>
        <p class="text-md w-5/12">Since our inception, we’ve been committed to collectors and enthusiasts in our pursuit of automotive perfection. We have proudly served over 500 collectors and enthusiasts worldwide.</p>
    </div>

    <hr class="border-black dark:border-gray-100 mx-32">

    <div class="flex gap-10 mt-20 px-24 justify-between items-center">
        <div class="w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Storage</h1>
                <x-primary-button size="md">See More</x-primary-button>
            </div>
            <p class="py-5">Custom storage options for enthusiasts looking for personalized service.</p>
        </div>
        <img class="w-7/12 h-[70vh] object-fit-cover" src="./storage/service_photos/main-0.webp" alt="lamborghinis lined up">
    </div>

    <div class="flex gap-10 mt-7 px-24 justify-between items-center">
        <img class="w-7/12 h-[70vh] object-fit-cover" src="./storage/service_photos/main-1.webp" alt="car part">
        <div class="w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Restoration & Service</h1>
                <x-primary-button size="md">See More</x-primary-button>
            </div>
            <p class="py-5">Our technicians and artisans are committed to automotive excellence.</p>
        </div>
    </div>

    <div class="flex gap-10 mt-7 px-24 justify-between items-center">
        <div class="w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Sales</h1>
                <x-primary-button size="md">See More</x-primary-button>
            </div>
            <p class="py-5">Our well-networked and well-informed team has access to the most exceptional examples in the world.</p>
        </div>
        <img class="w-7/12 h-[70vh] object-fit-cover" src="./storage/service_photos/main-2.webp" alt="lamborghinis lined up">
    </div>

    <div class="flex gap-10 mt-7 px-24 justify-between items-center">
        <img class="w-7/12 h-[70vh] object-fit-cover" src="./storage/service_photos/main-3.webp" alt="car part">
        <div class="w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Collection Management</h1>
                <x-primary-button size="md">See More</x-primary-button>
            </div>
            <p class="py-5">Building collection wish-lists, documenting provenance and determining value.</p>
        </div>
    </div>

</x-app-layout>
