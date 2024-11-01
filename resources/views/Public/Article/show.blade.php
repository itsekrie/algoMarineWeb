@extends('layouts.app')

@section('title')
    {{$articles->title}}
@endsection

@section('content')
    <section class="h-fit">
        <div class="w-full max-w-screen-xl mx-auto mt-16 mb-0 xl:flex xl:mt-12 xl:mb-16">
            {{-- section utama (artikel) --}}
            <div class="container mx-auto w-full mt-8 py-8 sm:px-16 lg:w-8/12 xl:w-8/12 xl:px-10 xl:py-8">
                {{-- gambar --}}

                @if($articles->cover)
                    <img src="{{ asset('storage/' . $articles->cover) }}" alt="{{ $articles->title }}" class="aspect-video object-cover rounded-lg  mb-4 ">
                @endif

                {{-- tanggal dan tag --}}
                <div class="mb-0">
                    <div class="bg-red-500 rounded-md inline-block text-white font-bold text-md mb-2 mr-1 px-2 ">
                        {{$articles->format()->format('d F Y')}}
                    </div>
                    
                </div>

                {{-- judul --}}
                <h1 class="text-2xl font-bold mb-4 sm:text-3xl lg:text-4xl">
                {{ $articles->title }}
                </h1>

                {{-- body artikel --}}
                <span class="text-justify indent-8">
                    {!! $articles->content !!}
                </span>

                <div class="border border-t-1 border-gray-200 w-full xl:hidden my-4">

                </div>
            </div>
        </div>
    </section>
@endsection