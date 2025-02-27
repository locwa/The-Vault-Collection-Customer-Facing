<x-app-layout>

    <x-slot:title>Services</x-slot:title>

    <div class="block md:flex justify-between items-center px-6 md:px-24 py-10">
        <h1 class="text-[5rem]">Services</h1>
        <p class="text-md w-11/12 md:w-5/12">Since our inception, we’ve been committed to collectors and enthusiasts in our pursuit of automotive perfection. We have proudly served over 500 collectors and enthusiasts worldwide.</p>
    </div>

    <hr class="border-black dark:border-gray-100 mx-32">

    <div class="md:flex gap-10 mt-20 px-6 md:px-24 justify-between items-center">
        <div class="md:w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Storage</h1>
                <a href="{{ route('storage') }}">
                    <x-primary-button size="md">See More</x-primary-button>
                </a>
            </div>
            <p class="py-5">Custom storage options for enthusiasts looking for personalized service.</p>
            <div class="flex gap-x-5 gap-y-2 flex-wrap mb-4">
                <p class="text-sm font-light text-gray-400">24-Hour Security</p>
                <p class="text-sm font-light text-gray-400">Regular Monitoring</p>
                <p class="text-sm font-light text-gray-400">Scheduled Maintenance</p>
            </div>
        </div>
        <img class="w-full md:w-7/12 h-[40vh] md:h-[70vh] object-fit-cover" src="./images/service_photos/main-0.webp" alt="lamborghinis lined up">
    </div>

    <div class="md:flex gap-10 mt-7 px-6 md:px-24 justify-between items-center">
        <img class="hidden md:block w-7/12 h-[70vh] object-fit-cover" src="./images/service_photos/main-1.webp" alt="car part">
        <div class="md:w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Restoration & Service</h1>
                <a href="{{ route('restoration-service') }}">
                    <x-primary-button size="md">See More</x-primary-button>
                </a>
            </div>
            <p class="py-5">Our technicians and artisans are committed to automotive excellence.</p>
            <div class="flex gap-x-5 gap-y-2 flex-wrap mb-4">
                <p class="text-sm font-light text-gray-400">Automotive Excellence</p>
                <p class="text-sm font-light text-gray-400">Historical Accuracy</p>
                <p class="text-sm font-light text-gray-400">Technical Mastery</p>
            </div>
        </div>
        <img class="md:hidden w-full md:w-7/12 h-[40vh] md:h-[70vh] object-fit-cover" src="./images/service_photos/main-1.webp" alt="car part">
    </div>

    <div class="md:flex gap-10 mt-7 px-6 md:px-24 justify-between items-center">
        <div class="md:w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Sales</h1>
                <a href="{{ route('sales') }}">
                    <x-primary-button size="md">See More</x-primary-button>
                </a>
            </div>
            <p class="py-5">Our well-networked and well-informed team has access to the most exceptional examples in the world.</p>
            <div class="flex gap-x-5 gap-y-2 flex-wrap mb-4">
                <p class="text-sm font-light text-gray-400">Exclusive Inventory</p>
                <p class="text-sm font-light text-gray-400">Knowledgeable Team</p>
                <p class="text-sm font-light text-gray-400">Transparent Transactions</p>
            </div>
        </div>
        <img class="w-full md:w-7/12 h-[40vh] md:h-[70vh] object-fit-cover" src="./images/service_photos/main-2.webp" alt="lamborghinis lined up">
    </div>

    <div class="md:flex gap-10 mt-7 px-6 md:px-24 justify-between items-center">
        <img class="hidden md:block w-7/12 h-[70vh] object-fit-cover" src="./images/service_photos/main-3.webp" alt="car part">
        <div class="md:w-4/12">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl w-5/12 font-semibold">Collection Management</h1>
                <a href="{{ route('collection-management') }}">
                    <x-primary-button size="md">See More</x-primary-button>
                </a>
            </div>
            <p class="py-5">Building collection wish-lists, documenting provenance and determining value.</p>
            <div class="flex gap-x-5 gap-y-2 flex-wrap mb-4">
                <p class="text-sm font-light text-gray-400">Tailored Wish-Lists</p>
                <p class="text-sm font-light text-gray-400">Provenance Documentation</p>
                <p class="text-sm font-light text-gray-400">Accurate Valuation</p>
            </div>
            <img class="md:hidden w-full md:w-7/12 h-[40vh] md:h-[70vh] object-fit-cover" src="./images/service_photos/main-3.webp" alt="car part">
        </div>
    </div>

</x-app-layout>
