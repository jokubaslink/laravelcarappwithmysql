@extends('layouts.main')

@section('content')
    <div class="flex flex-col p-8 my-6 md:my-24">
        <div class="flex flex-col items-center justify-center mb-8">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-medium text-center">Welcome to Car App!</h1>
            <p class="text-center text-xl font-light">The best car rental agency.</p>
        </div>
        <figure class="max-w-[400px] w-full m-auto">
            <img class="w-full" src="./images/undraw_order_a_car_-3-tww.svg" alt="">
        </figure>
        <ul class="flex flex-col sm:flex-row gap-8 sm:gap-0 items-center w-full justify-around text-center mt-20">
            <li class="text-2xl font-light hover:border-b-2 hover:border-yellow-600"><a href="/cars">View our car
                    selection</a></li>
            <li class="text-2xl font-light hover:border-b-2 hover:border-yellow-600"><a href="/about">Get to know more
                    about
                    us</a></li>
        </ul>
    </div>
@endsection
