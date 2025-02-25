<x-app-layout>
    <x-slot:title>Inventory</x-slot:title>

    <div class="flex justify-between items-center px-24 py-10">
        <h1 class="text-[5rem]">Inventory</h1>
    </div>

    <div class="px-24 text-center">
        <div class="flex w-full gap-10">
            <div class="grow-1 w-1/3 h-[90vh] justify-start bg-gray-300 dark:bg-[#1f1f1f] my-5 rounded-[10px]">

            </div>
            <div class="grow-4 flex flex-wrap flex-row w-full mb-8">
                    @foreach($inventory as $inv)
                        <a href="" class="w-[22rem] h-[43vh] m-2 flex flex-col flex-wrap justify-between">
                            <div>
                                <img src="./storage/cars/{{$inv->photo_header}}0.jpg" alt="" srcset="">
                                <h4 class="text-2xl my-2 px-2">{{sprintf("%u %s %s", $inv->year, $inv->make, $inv->model )}}</h4>
                            </div>
                            <h4 class="text-2xl font-semibold my-2 px-2">
                                @if($inv->status == true)
                                    Sold
                                @else
                                    {{ $inv->is_poa ? "Price on Application" : numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $inv->price, "USD")}}
                                @endif
                            </h4>
                        </a>
                    @endforeach

            </div>
        </div>

        {{ $inventory->links() }}

    </div>

</x-app-layout>
