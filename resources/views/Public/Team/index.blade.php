@extends('layouts.app')

@section('title', 'Teams', '| Algomarine')

@section('content')

<section>
    <div>
        @foreach($teams as $tim)
        <a href="{{route('Teams.show', $tim->Slug)}}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{$tim->Team_Name}}
            </h5>
        </a>
        @endforeach
    </div>
    
        
</section>

@endsection