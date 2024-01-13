@extends('layouts.main')

@section('content')
    <div class="flex flex-col {{$rentStatus ? 'my-6' : 'my-6 md:my-24 p-20' }} justify-center gap-8 shadow-lg rounded-md">
        @if($rentStatus)
            <x-rent-form-component :car="$car" />
        @else
            <x-car-card-component :car="$car" :confirmation="$confirmation" />
        @endif
    </div>
@endsection
