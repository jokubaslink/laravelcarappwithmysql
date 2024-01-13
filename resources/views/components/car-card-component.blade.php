<div class="">
    <div class="flex flex-col md:flex-row w-full items-center justify-between">
        <div class="flex flex-col gap-6 items-center justify-center  mb-8 md:mb-0 w-full">
            <h2 class="text-center md:text-start text-4xl sm:text-5xl lg:text-6xl font-bold">{{ $car['name'] }}</h2>
            <ul class="font-light text-2xl lg:text-3xl">
                <li class="text-center md:text-start">Year: {{ $car['year'] }}</li>
                <li class="text-center md:text-start">Transmission: {{ $car['transmission'] }}</li>
                <li class="text-center md:text-start">Fuel: {{ $car['fuel'] }}</li>
            </ul>
            <h3 class="text-center font-medium text-2xl lg:text-3xl ">Price: {{ $car['price'] }}$ / day</h3>

            @if (!$confirmation ?? false)
                <a class="text-center bg-yellow-600 text-white text-lg font-bold p-3 max-w-[200px] w-full"
                    href="{{ route('rent.car', $car['id']) }}">Rent now</a>
            @endif
        </div>
        <div class="max-w-[400px] md:max-w-[600px] w-full">
            <img class="w-full" src="{{ $car['img'] }}" alt="">
        </div>
    </div>
    @if ($confirmation ?? false)
        <h3 class="text-green-300 text-center text-xl">{{ $confirmation }}</h3>
    @endif
</div>
