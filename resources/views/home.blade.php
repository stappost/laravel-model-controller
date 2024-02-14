@extends('layouts.movies')

@section('content')
    <h1 class="text-center my-3 rotatex">MOVIES</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card my-3 p-2 text-white text-center">
                        <h3 class="py-2"><a href="{{ route('details', ['param' => $movie['id']]) }}"> {{ $movie->title }}
                            </a></h3>
                        <h5>Titolo originale: {{ $movie->original_title }}</h5>
                        <p class="pt-3">Nazionalità: {{ $movie->nationality }}</p>
                        <p>Data: {{ $movie->date }}</p>
                        <p>Voto: <span
                                class="{{ $movie->vote > 5 ? 'text-success' : 'text-danger' }}">{{ $movie->vote }}</span>
                        </p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
