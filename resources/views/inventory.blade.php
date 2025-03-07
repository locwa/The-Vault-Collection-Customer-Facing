<x-app-layout>
    <x-slot:title>Inventory</x-slot:title>

    <div class="flex items-center justify-center md:justify-start md:px-24 md:py-10">
        <h1 class="text-[5rem]">Inventory</h1>
    </div>

    <!-- Mobile Filters -->
    <div>
        <div class="sm:hidden h-12 bg-[#cfcfcf] dark:bg-[#2f2f2f] px-4 mx-6 mt-4 mb-4 rounded-[10px] flex justify-between items-center" id="dropdownFilterButton" onclick="dropdownFilter()">
            <p>Filters</p>
            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </div>

        <div class="flex w-full" id="dropdownFilterMenu" style="display:none">
            <div class="flex flex-col grow-1 w-full justify-start rounded-[10px] mb-4 px-6 text-left">
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
                    <x-primary-button class="my-2 w-full flex justify-center py-4">Search</x-primary-button>
                </form>
            </div>
        </div>
        <a href="{{ route('inventory') }}" class="flex justify-center px-4">
            <x-primary-button class="px-20 py-3 mx-2 mb-5 w-full justify-center" :inverted="true">Reset Search</x-primary-button>
        </a>

    </div>

    <script>
        let dropdownFilterMenu = document.getElementById('dropdownFilterMenu');
        function dropdownFilter() {
            if (dropdownFilterMenu.style.display === "none"){
                dropdownFilterMenu.style.display = "flex";
            } else {
                dropdownFilterMenu.style.display = "none";
            }
        }
    </script>

    <div class="px-4 md:px-24 text-center">
        <div class="flex w-full gap-10">
            <div class="hidden md:flex flex-col grow-1 w-1/3  justify-start rounded-[10px] p-6 text-left">
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

            @if($inventory->total() > 0)
                <div class="grow-4 flex flex-wrap flex-row w-full mb-12 md:justify-start justify-center">
                    @foreach($inventory as $inv)
                        <a href="{{ route('view-car', $inv->id) }}" class="w-[22rem] lg:h-[25rem] m-2 flex flex-col flex-wrap justify-between hover:bg-gray-300 dark:hover:bg-[#1f1f1f] rounded-[5px]">
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
            @else
                <div class="flex flex-col w-full">
                    <p class="text-xl dark:text-white text-center w-full">Sorry, It seems like that we don't have a {{ request()->query('year') . " " . request()->query('make') . " " . request()->query('model') . " in our inventory"  }}</p>
                    <p class="text-md text-gray-500 text-center">Please try another combination</p>
                </div>
            @endif

        </div>

        <div class="flex justify-center ">
            {{ $inventory->links() }}
        </div>


    </div>

</x-app-layout>
