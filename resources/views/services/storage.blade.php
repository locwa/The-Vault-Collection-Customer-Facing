<x-app-layout>
    <x-slot:title>Storage</x-slot:title>

    <div class="px-4 md:px-20 py-7">
        <div class="w-full">
            <div class="mb-5 md:mb-0 md:flex justify-between items-center">
                <h1 class="text-[4rem] font-semibold">Storage</h1>
                <x-primary-button size="md">Learn More</x-primary-button>
            </div>
            <div class="flex gap-x-5 gap-y-2 flex-wrap">
                <p class="text-sm text-gray-400">24-Hour Security</p>
                <p class="text-sm text-gray-400">Regular Monitoring</p>
                <p class="text-sm text-gray-400">Scheduled Maintenance</p>
            </div>
        </div>
        <div class="w-full flex md:justify-end pt-3">
            <p class="md:w-8/12 md:text-right">
                The Vault is dedicated to offering storage solutions tailored specifically for vintage and supercar enthusiasts. Our bespoke storage services ensure that your prized possessions are kept in pristine condition, offering you peace of mind through unparalleled security and care.
            </p>
        </div>

        <div class="pt-8 pb-20 md:flex gap-20 justify-between items-end">
            <div class="md:w-4/12">
                <h1 class="text-3xl font-semibold">Welcome to The Vault's Storage Solutions</h1>
                <p class="mb-5 md:mb-0 pt-6">The Vault is dedicated to offering storage solutions tailored specifically for vintage and supercar enthusiasts. Our bespoke storage services ensure that your prized possessions are kept in pristine condition, offering you peace of mind through unparalleled security and care.</p>
            </div>
            <img class="md:w-7/12 h-[70vh] object-fit-cover" src="../images/service_photos/storage-0.webp" alt="dsfasd">
        </div>

        <hr class="border-black dark:border-gray-100 md:mx-32">

        <div class="md:flex justify-between py-12 px-9">
            <h1 class="text-3xl mb-5 md:mb-0">Why Choose Our Storage Solutions?</h1>
            <p class="font-light text-xl md:w-6/12">Our storage solutions are designed to meet the unique needs of vintage and supercar owners. Here’s what you can expect from our services:</p>
        </div>
        <div class="py-16 md:flex justify-between">
            <div class="md:w-[25rem]">
                <img class="max-w-[23rem] h-[20rem] object-fit-cover" src="../images/service_photos/storage-1.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">24-Hour Security</h3>
                    <p class="text-md font-light w-full">Our facility offers round-the-clock security to ensure your vehicle is always protected.</p>
                </div>
            </div>
            <div class="md:w-[25rem]">
                <img class="w-[25rem] h-[20rem] object-fit-cover" src="../images/service_photos/storage-2.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">Regular Monitoring</h3>
                    <p class="text-md font-light w-full">We provide continuous monitoring to maintain the condition of your car.</p>
                </div>
            </div>
            <div class="md:w-[25rem]">
                <img class="max-w-[23rem] h-[20rem] object-fit-cover" src="../images/service_photos/storage-3.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">Scheduled Maintenance</h3>
                    <p class="text-md font-light w-full">Our team conducts regular maintenance to keep your vehicle in top shape.</p>
                </div>
            </div>
        </div>

    </div>

    <hr class="border-black dark:border-gray-100">

</x-app-layout>
