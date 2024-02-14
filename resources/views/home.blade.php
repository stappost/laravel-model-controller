@extends('layouts.movies')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card my-3 p-2">
                        <h3>Titolo: {{ $movie->title }}</h3>
                        <h5>Titolo originale: {{ $movie->original_title }}</h5>
                        <p>Nazionalità: {{ $movie->nationality }}</p>
                        <p>Data: {{ $movie->date }}</p>
                        <p>Voto: {{ $movie->vote }}</p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
