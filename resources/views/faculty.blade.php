@extends('layouts.app_movie')

@section('content')
    <ul>
        @foreach($faculties as $faculty)
            <li>{{ $faculty->name }}</li>
        @endforeach
    </ul>
@endsection
