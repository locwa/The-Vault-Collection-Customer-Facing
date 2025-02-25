<x-app-layout>
    <x-slot:title>{{ sprintf('%u %s %s', $car->value('year'), $car->value('make'), $car->value('model')) }}</x-slot:title>

    <x-image-carousel photoFileHeader="storage/cars/{{ $car->value('photo_header') }}" photoCount="{{ $car->value('photo_count') }}" photoExtension="jpg" carInfo="{{ sprintf('A photo of %u %s %s', $car->value('year'), $car->value('make'), $car->value('model')) }}">
        <x-slot:heading>
            <h1 class="text-5xl font-semibold">{{ sprintf('%u %s %s', $car->value('year'), $car->value('make'), $car->value('model')) }}</h1>
        </x-slot:heading>
        <x-slot:details class="flex flex-col justify-end">
            <div class="text-right">
                <p class="text-right mb-1">{{ $car->value('mileage') }} miles</p>
                <h3 class="text-2xl mb-1">{{ $car->value('is_poa') ? "Price on Application" : $car->value('price') }}</h3>
                <a href="{{ route('contact') }}">
                    <x-primary-button>INQUIRE</x-primary-button>
                </a>
            </div>
        </x-slot:details>
    </x-image-carousel>

    <hr class="border-black dark:border-gray-100 mx-16">

    <div class="px-24 my-10">
        <h1 class="text-5xl font-semibold">Description</h1>
        <p class="whitespace-pre-wrap mt-8 text-lg">{{ $car->value('description') }}</p>
    </div>
</x-app-layout>
