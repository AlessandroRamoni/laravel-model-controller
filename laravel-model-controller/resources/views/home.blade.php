@foreach ($movies as $movie)
    <div>
        <h2>{{ $movie['title'] }}</h2>
        <p>{{ $movie['vote'] }}</p>
    </div>
@endforeach
