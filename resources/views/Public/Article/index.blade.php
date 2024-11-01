@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('content')
<section class="min-h-screen">
    {{-- header --}}
    <div class="container mx-auto w-full max-w-screen-xl flex flex-col justify-center items-center mt-24 mb-8">
        {{-- judul page --}}
        <div class="flex justify-center mb-8">
            <h1 class="font-extrabold text-2xl md:text-4xl xl:text-5xl ">
                Artikel
            </h1>
        </div>
        
        {{-- search bar --}}
        {{-- <form action="{{ route('articles') }}" method="GET">
            <div class="relative container mx-auto flex mb-10 justify-center xl:mb-16 px-16 ">
                <div class="absolute bg-white flex justify-between py-2 px-4 w-full sm:w-clg shadow-md rounded-3xl hover:border-2 hover:transition hover:border-indigo-500 ">
                    <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Search articles...">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass" style="color: #f05252;"></i>
                    </button>
                </div>
            </div>
        </form> --}}
    </div>
  

    <div class="tab-section scroll-tag flex flex-col xl:flex-row xl:container xl:mx-auto">

        {{-- daftar artikel --}}
        <div class="mx-auto grid gap-8 mb-16 sm:px-16 md:grid-cols-2 lg:grid-cols-3 lg:px-10 xl:w-10/12 xl:max-w-full xl:mx-0 justify-center">
            {{-- card article --}}
            @foreach($articles as $article) 
                <div class="w-full max-w-sm rounded-lg shadow-lg mb-4">
                    {{-- thumbnail --}}
                    @if($article->cover)
                    <img class="aspect-video object-cover rounded-lg rounded-b-none" src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                    @endif

                    {{-- tanggal dan tag --}}
                    <div class="mx-4 my-2 mb-1 p-2">
                        <div class="bg-red-500 rounded-md inline-block text-white font-bold text-md mb-2 mr-1 px-2 ">
                            {{$article->format()->format('d F Y')}}
                        </div>  
                    </div>

                    {{-- judul dan preview --}}
                    <div class="px-6 mb-4 py-2">
                        <h2 class="h-14 text-xl font-semibold line-clamp-2 mb-4 ">
                            <a href="{{ route('Articles.show', $article->slug) }}">{{ Str::limit($article->title, 50) }}</a>
                        </h2>
                        <div class="h-24 mb-2">
                            <span class="text-base line-clamp-3">{!! Str::limit($article->content, 100) !!}</span>
                        </div>
                        <div class="flex justify-end mt-2">
                            <button onclick="window.location.href='{{ route('Articles.show', $article->slug) }}'" class="border-2 border-red-500 rounded-xl p-2 w-full sm:w-auto hover:bg-red-500 hover:scale-95 hover:transition active:bg-red-700 group">
                                <span class="text-red-500 font-semibold group-hover:text-white group-active:text-white">
                                    Baca Selengkapnya
                                </span>
                            </button>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
        <div></div>
    </div>
</section>
@endsection