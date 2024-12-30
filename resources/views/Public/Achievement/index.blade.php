@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1 class="mt-52 text-4xl text-center font-bold mb-10">Algomarine Achievements</h1>

    <div class="flex justify-around w-10/12 flex-wrap mb-16 mx-auto">
        {{-- card achievements --}}
        @foreach ($achive as $ach)
            <a href="{{ url('/Achievements/' . $ach->Title) }}">
                <div class="border border-black w-72 hover:scale-110 ease-in-out duration-300 mt-10  ">
                    <h2 class="ml-2 text-lg font-bold">{{ $ach->Title }}</h2>
                    <p class="ml-2">{{ $ach->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
