<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/syles.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.html" class="logo">
        <img src="./assets/images/logo.svg" alt="Filmlane logo">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">AU</option>
            <option value="ar">AR</option>
            <option value="tu">TU</option>
          </select>
        </div>

        <button class="btn btn-primary"> <a href="/login"> sign in</a></button>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          {{-- <li>
            <a href="/popular" class="navbar-link">Home</a>
          </li> --}}
          <li>
            <a href="#popular" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Tv Show</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Web Series</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Pricing</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
  {{-- <div class="popular-nav" id="popular">
    
    <div class="list">
        @foreach ($movies as $movie)
      
            <div class="container-card" >     
                <h2>{{ $movie['title'] }}</h2>
                @if (isset($movie['poster_path']))
                <img src="https://media.themoviedb.org/t/p/w220_and_h330_face{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }} Poster">
                @endif
                {{-- <p>{{ $movie['overview'] }}</p> --}}
                {{-- <div class="overview">{{ $movie['overview'] }}</div>
                <span>{{ $movie['release_date'] }}</span>
                <span>{{ $movie['vote_average'] }}</span>
                <span>{{ $movie['vote_count'] }}</span> --}}
                {{-- <p class="read-more-btn" onclick="toggleReadMore(this)">Read More</p> --}}
                <!-- Add more movie details as needed -->
            </div>
        {{-- @endforeach --}}
    </div>
  </div> --}}
</body>
</html>