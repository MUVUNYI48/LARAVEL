<!-- resources/views/movies/index.blade.php -->
@extends('layout.nav')
@section('movies');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Data</title>
    <link rel="stylesheet" href="{{asset('css/upcoming.css')}}">

</head>
<body>

    <div class="movies" id="movies">

        <h1 id="TOPRATED">Top Rated Movies</h1>

                {{-- TEST --}}

                <div class="list">
                    @foreach ($topRatedMovies as $movie)
                        <div class="container-card">
                            <h2>{{ $movie['title'] }}</h2>
                            @if (isset($movie['poster_path']))
                                <img src="https://media.themoviedb.org/t/p/w220_and_h330_face{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }} Poster">
                            @endif
                            <div class="overview">{{ $movie['overview'] }}</div>
                            <span>{{ $movie['release_date'] }}</span>
                            <span>{{ $movie['vote_average'] }}</span>
                            <span>{{ $movie['vote_count'] }}</span>
                            <p class="read-more-btn" onclick="toggleReadMore(this)">Read More</p>
                        </div>
                    @endforeach
                </div>

                {{--}}
                
                {{-- TRENDING--}}
                
                <h1>Trending Movies</h1>

                <div id="TRENDING" class="list">
                    @foreach ($trendingMovies as $movie)
                        <div class="container-card">
                            <h2>{{ $movie['title'] }}</h2>
                            @if (isset($movie['poster_path']))
                                <img src="https://media.themoviedb.org/t/p/w220_and_h330_face{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }} Poster">
                            @endif
                            <div class="overview">{{ $movie['overview'] }}</div>
                            <span>{{ $movie['release_date'] }}</span>
                            <span>{{ $movie['vote_average'] }}</span>
                            <span>{{ $movie['vote_count'] }}</span>
                            <p class="read-more-btn" onclick="toggleReadMore(this)">Read More</p>
                        </div>
                    @endforeach
                </div>
                

                {{-- --}}

        <script>
            function toggleReadMore(button) {
                var container = button.parentElement;
                var overview = container.querySelector('.overview');
    
                if (overview.style.height === '3.6em') {
                    overview.style.height = 'auto';
                    button.innerText = 'Read Less';
                } else {
                    overview.style.height = '3.6em';
                    button.innerText = 'Read More';
                }
            }
        </script>
    </div>

</body>
</html>
@endsection