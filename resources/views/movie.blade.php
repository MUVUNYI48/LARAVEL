<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{asset('css/upcoming.css')}}">


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        section {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            /* color: #333; */
            color: #068a7f;
        }

        .movie-details {
            display: flex;
            justify-content: space-between;
        }

        .movie-poster {
            width: 300px;
            margin-right: 20px;
        }

        .movie-description {
            flex: 1;
        }

        .trailer-button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <h1>Movie Website</h1>
</header>

<section>
    <h2>Movie Title</h2>
    <div class="movie-details">
        <div class="movie-poster">
            <img src="https://th.bing.com/th/id/OIP.d79MgflvkzKUKyV8qwpT9QHaEK?rs=1&pid=ImgDetMain" alt="Movie Poster">
        </div>
        <div class="movie-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista probare, quae sunt a te dicta?</p>
            <p>Release Date: January 1, 2023</p>
            <p>Genre: Action, Drama</p>
            <p>Director: John Doe</p>
            <p>Starring: Actor1, Actor2, Actor3</p>
            <button class="trailer-button">Play Trailer</button>
        </div>
    </div>
</section>

</body>
</html>
