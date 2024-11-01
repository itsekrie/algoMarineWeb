@extends('layouts.app')

@section('title')
{{$team->Team_Name . ' Team'}}
@endsection

@section('content')
    <section class="h-screen">
        <h1 class="text-center font-semibold text-5xl mt-28 text-[#08A79A]">{{ $team->Team_Name }}</h1>
        <div class="flex flex-wrap justify-center gap-20 w-3/4 mt-28 mx-auto">
            @foreach ($members as $anggota)
                <div class="delay-[700ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="400" >
                    <div class="bg-slate-200 hover:scale-110 ease-in-out duration-300 w-64 h-80 p-3 rounded-lg">
                        <img src="{{ asset('storage/' . $anggota->Image) }}" alt="aduh"
                            class="border border-AlgoBlue-100 w-32 h-32 mx-auto mt-5 rounded-full mb-5">
                        <h1 class="font-open-sans font-bold capitalize text-2xl">
                            {{$anggota->Nama}}
                        </h1>
                        <h2 class="font-open-sans font-semibold capitalize text-xl text-AlgoBlue-100">
                            {{$anggota->Position}}
                        </h2>
                        <h2 class="font-open-sans font-thin capitalize text-xl">
                            {{$anggota->Jurusan}}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
@endsection
