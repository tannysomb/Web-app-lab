@extends('layouts.app_movie')

@section('content')
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie }}</li>
        @endforeach
    </ul>
@endsection
