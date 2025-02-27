@props([
    'photoFileHeader',
    'photoCount',
    'carInfo',
    'photoExtension' => "png"
])

@php
    $isHome = request()->is('/');
@endphp

<div class="mb-5 flex flex-col items-center" id="imagesContainer">
    <img id="carPhoto" class="{{ $isHome ? 'h-[40vh] md:h-[55vh]' : 'md:h-[65vh]' }} w-[90vw] flex justify-center object-center object-fit-cover  md:object-position-y-71" src="{{ $isHome ? './' : '../' }}{{ $photoFileHeader . '0.'. $photoExtension }}" alt="{{ $carInfo }}">
    <div class="flex my-6 justify-between items-start w-[90vw]">
        @isset($heading)
            {{ $heading }}
        @endisset
        <div>
            <div class="flex justify-end mb-14">
                <x-directional-button position="left" onclick="previousButton('{{$photoFileHeader}}', {{$photoCount}})"></x-directional-button>
                <x-directional-button position="right" onclick="nextButton('{{$photoFileHeader}}', {{$photoCount}})"></x-directional-button>
            </div>
            @isset($details)
                {{ $details }}
            @endisset
        </div>
    </div>
</div>

<script>
    let index = 0;

    function previousButton (photoHeader, imgCount){
        let image = document.getElementById('carPhoto');
        if (index > 0){
            image.src = `{{ $isHome ? './' : '../' }}${photoHeader}${index - 1}.{{$photoExtension}}`;
            index--;
        } else if (index === 0){
            image.src = `{{ $isHome ? './' : '../' }}${photoHeader}${imgCount - 1}.{{$photoExtension}}`
            index = imgCount - 1;
        }
    }
    function nextButton (photoHeader, imgCount){
        let image = document.getElementById('carPhoto');
        if (index !== (imgCount - 1)){
            image.src = `{{ $isHome ? './' : '../' }}${photoHeader}${index + 1}.{{$photoExtension}}`;
            index++;
        } else if (index === (imgCount - 1)){
            image.src = `{{ $isHome ? './' : '../' }}${photoHeader}0.{{$photoExtension}}`;
            index = 0;
        }
    }
</script>
