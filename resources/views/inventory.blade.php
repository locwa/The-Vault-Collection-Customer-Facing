<x-app-layout>
    <x-slot:title>Inventory</x-slot:title>

    <div class="flex justify-between items-center px-24 py-10">
        <h1 class="text-[5rem]">Inventory</h1>
    </div>

    <div class="px-24 text-center">
        <div class="flex w-full gap-10">
            <div class="grow-1 w-1/3 h-[90vh] justify-start dark:bg-gray-800 my-5">

            </div>
            <div class="grow-4 flex flex-wrap flex-row w-full">
                    @foreach($inventory as $inv)
                        <div class="w-80 h-96 dark:bg-gray-800 m-5">

                        </div>
                    @endforeach

            </div>
        </div>

        {{ $inventory->links() }}

    </div>

</x-app-layout>
