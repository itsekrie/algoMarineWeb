@extends('layouts.app')

@section('content')
<section>
    {{$team->Team_Name}}
    @foreach ($members as $anggota )
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            Nama {{$anggota->Nama}}
            <img src="{{asset('storage/' . $anggota->Image)}}" alt="aduh">
        </div>

    @endforeach
</section>
@endsection