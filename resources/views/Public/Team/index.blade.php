@extends('layouts.app')

@section('title')
    Teams
@endsection

@section('content')

    <section class="relative h-screen pt-10">
        <header>
            <h1 class=" text-center text-5xl font-semibold mt-20 text-[#08A79A]">Divisi Algomarine</h1>
        </header>

        <div class="flex flex-row flex-wrap w-5/6 mt-32 justify-center gap-16 mx-auto ">
            @foreach ($teams as $tim)
                <a href="{{ route('Teams.show', $tim->Slug) }}">
                    <div class="container pt-7 pl-3 pr-4 pb-4 bg-slate-100 bg-opacity-50 w-80 h-72 overflow-hidden rounded-xl hover:bg-opacity-100 hover:scale-125 ease-in-out duration-300">
                        <img class="w-28 h-28 mx-auto pb-2 opacity-40" src="{{asset('storage/' . $tim->Team_Logo)}}" alt="">
                        <h5 class="ml-3 font-semibold text-[#08A79A]">
                            {{ $tim->Team_Name }}
                        </h5>
                        <p class="ml-3 mt-4">
                            {{ $tim->Team_Desc }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>


    </section>

@endsection
