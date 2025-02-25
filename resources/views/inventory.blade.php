<x-app-layout>
    <x-slot:title>Inventory</x-slot:title>

    <div class="flex justify-between items-center px-24 py-10">
        <h1 class="text-[5rem]">Inventory</h1>
    </div>

    <div class="px-24 text-center">
        <div class="flex w-full gap-10">
            <div class="grow-1 w-1/3 h-[50vh] justify-start bg-gray-300 dark:bg-[#1f1f1f] rounded-[10px] p-6 text-left">
                <a href="{{ route('inventory') }}" class="flex justify-center">
                    <x-primary-button class="px-20 py-3 mb-5 w-full justify-center">Reset Search</x-primary-button>
                </a>
                <form method="GET" action="{{ route('inventory') }}">
                    <div class="flex flex-col mb-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="text-black px-2 py-2 rounded-[5px]">
                            <option value="0" selected>Available</option>
                            <option value="1" {{ request()->query('status') ? "selected" : "" }}>Sold</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="id" class="text-[#0f0f0f] dark:text-gray-100 font-semibold">Year:</label>
                        <input type="text" name="year" id="year" class="text-black p-2 rounded-[5px]" value="{{ request()->query('year') }}" placeholder="1990">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="make">Make</label>
                        <select name="make" id="make" class="text-black px-2 py-2 rounded-[5px]">
                            <option value="" selected disabled>Select One</option>
                            @foreach($makes as $make)
                                <option value="{{ $make->make }}" {{$make->make == request()->query('make') ? "selected" : "" }}>{{ $make->make }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="model">Model</label>
                        <select name="model" id="model" class="text-black px-2 py-2 rounded-[5px]">
                            <option value="" selected disabled>Select One</option>
                            @foreach($models as $model)
                                <option value="{{ $model->model }}" {{$model->model == request()->query('model') ? "selected" : "" }}>{{ $model->model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-primary-button class="my-2">Search</x-primary-button>
                </form>
            </div>

            <div class="grow-4 flex flex-wrap flex-row w-full mb-8">
                    @foreach($inventory as $inv)
                        <a href="{{ route('view-car', $inv->id) }}" class="w-[22rem] h-[43vh] m-2 flex flex-col flex-wrap justify-between hover:bg-gray-300 dark:hover:bg-[#1f1f1f] rounded-[5px]">
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
