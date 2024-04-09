@extends('layouts/app')

@section('content')

<h1>Tutti i film del database</h1>

<ul>
    @foreach($movies as $movie)
        <li>
            {{$movie->title}}
        </li>
    @endforeach
</ul>

@endsection