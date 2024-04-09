@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="text-center py-4">Tutti i film del database</h1>

    <div class="row row-cols-5">
        @foreach($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h2 class="card-title fw-bold fs-2 text-uppercase">{{$movie->title}}</h2>
                <h3 class="card-original-title fs-4">{{$movie->original_title}}</h3>
                <h4 class="card-nazionality fs-6">Nazionalità: {{$movie->nationality}}</h4>
                <h5 class="card-date fs-5">Data uscita: {{$movie->date}}</h5>
                <span class="card-vote text-danger fw-bold">Voto: {{$movie->vote}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection