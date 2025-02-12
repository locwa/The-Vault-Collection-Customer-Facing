<x-app-layout>
    <x-slot:title>Sales</x-slot:title>

    <div class="px-20 py-7">
        <div class="w-full">
            <div class="flex justify-between items-center">
                <h1 class="text-[4rem] font-semibold">Sales</h1>
                <x-primary-button size="md">Learn More</x-primary-button>
            </div>
            <div class="flex gap-x-5 gap-y-2 flex-wrap">
                <p class="text-sm text-gray-400">Exclusive Inventory</p>
                <p class="text-sm text-gray-400">Knowledgeable Team</p>
                <p class="text-sm text-gray-400">Transparent Transactions</p>
            </div>
        </div>
        <div class="w-full flex justify-end pt-3">
            <p class="w-8/12 text-right">
                Our well-networked and well-informed team has access to the most exceptional examples in the world
            </p>
        </div>

        <div class="pt-8 pb-20 flex gap-20 justify-between items-end">
            <div class="w-4/12">
                <h1 class="text-3xl font-semibold">Welcome to The Vault's Sale Services</h1>
                <p class="pt-6">The Vault is dedicated to offering an exceptional sales experience for collectors of vintage supercars. Our exclusive inventory features the rarest and most sought-after vehicles, providing unparalleled opportunities for collectors to acquire true automotive treasures.</p>
            </div>
            <img class="w-7/12 h-[70vh] object-fit-cover" src="../images/service_photos/sales-0.webp" alt="dsfasd">
        </div>

        <hr class="border-black dark:border-gray-100 mx-32">

        <div class="flex justify-between py-12 px-9">
            <h1 class="text-3xl">Why Choose Our Sales Services?</h1>
            <p class="font-light text-xl w-6/12">Our commitment to integrity and excellence sets us apart. Each transaction is handled with the utmost care, ensuring that the true value and uniqueness of each vehicle are reflected. Here’s what you can expect from our sales services:</p>
        </div>
        <div class="py-16 flex justify-between">
            <div class="w-[25rem]">
                <img class="w-[25rem] h-[20rem] object-fit-fill" src="../images/service_photos/sales-1.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">Exclusive Inventory</h3>
                    <p class="text-md font-light w-full">We offer a curated selection of blue-chip vintage supercars, each with a unique story and exceptional value.</p>
                </div>
            </div>
            <div class="w-[25rem]">
                <img class="w-[25rem] h-[20rem] object-fit-cover" src="../images/service_photos/sales-2.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">Knowledgeable Team</h3>
                    <p class="text-md font-light w-full">Our team’s extensive knowledge and network provide access to the rarest cars in the world.</p>
                </div>
            </div>
            <div class="w-[25rem]">
                <img class="w-[25rem] h-[20rem] object-fit-cover" src="../images/service_photos/sales-3.webp" alt="photo">
                <div class="py-5">
                    <h3 class="text-2xl font-semibold">Transparent Transactions</h3>
                    <p class="text-md font-light w-full">We ensure every transaction is transparent and reflects the true worth of each vehicle.</p>
                </div>
            </div>
        </div>

    </div>

    <hr class="border-black dark:border-gray-100">
</x-app-layout>
