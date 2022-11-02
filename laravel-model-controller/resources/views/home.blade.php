@extends('layout/layout_home')

@section('main')
    <h1>My DB Movies</h1>
    <div class="card-container">

        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie['title'] }}</h2>
                <h5>Titolo Originale:</h5>
                <h3>{{ $movie['original_title'] }}</h3>
                <h5>Nazionalita':</h5>
                <p>{{ $movie['nationality'] }}</p>
                <h5>Data Uscita:</h5>
                <p>{{ $movie['date'] }}</p>
                <h5>Voto:</h5>
                <span>{{ $movie['vote'] }}</span>
            </div>
        @endforeach
    </div>
@endsection
