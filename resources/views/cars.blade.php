@extends('layouts.main')

@section('content')
    <div class="my-6 md:my-24 p-2 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($masinos as $masina)
            <figure class="rounded-md p-8 border-2 border-gray-300 flex  flex-col items-center justify-center">
                <figcaption class="font-medium text-center text-2xl">{{ $masina['name'] }}</figcaption>
                <a href="/cars/{{ $masina['id'] }}">
                    <img class="w-[250px]" src="{{ $masina['img'] }}" alt="">
                </a>
            </figure>
        @endforeach
    </div>
@endsection
