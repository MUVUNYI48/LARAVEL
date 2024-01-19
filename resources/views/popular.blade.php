
@extends('layout.nav')
@section('popular');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Movies</title>
    <link rel="stylesheet" href="{{asset('css/popular.css')}}">

</head>
<body>
    <h1>Popular Movies</h1>
     <div class="popular" id="popular">
        <div class="list">
            @foreach ($movies as $movie)
          
                <div class="container-card" >     
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
     </div>
    </body>
    </html>
    @endsection
