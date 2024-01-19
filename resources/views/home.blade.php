
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header>
    <h1>Movie Website</h1>
</header>

<nav>
    <a href="#home">Home</a>
    <a href="#movies">Movies</a>
    <a href="#tv-shows">TV Shows</a>
    <a href="/contact">Contact</a>
    <a href="/popular">popular</a>
    <a href="/upcoming">upcoming</a>
</nav>

<div class="search-container">
    <input type="text" class="search-bar" placeholder="Search...">
    <button class="search-button">Search</button>
</div>

<div href='/popular'>
    <p class="popular">
       <href="/popular">popular</href>
    </P>
</div>

<main>

    <section>
        <h2>Featured Movies</h2>
        <div class="movie-container">

            <div class="movie">
                <img src="https://th.bing.com/th/id/OIP.d79MgflvkzKUKyV8qwpT9QHaEK?rs=1&pid=ImgDetMain" alt="Movie 1">
                <div class="movie-details">
                    <h3>Movie 1 Title</h3>
                    <p>Description of Movie 1.</p>
                </div>
            </div>

            <div class="movie">
                <img src="https://i.pinimg.com/originals/50/54/16/505416aa2976c6ba2e52ced5267b93f8.jpg" alt="Movie 2">
                <div class="movie-details">
                    <h3>Movie 2 Title</h3>
                    <p>Description of Movie 2.</p>
                </div>
            </div>
            <div class="movie">
                <img src="https://i.pinimg.com/originals/50/54/16/505416aa2976c6ba2e52ced5267b93f8.jpg" alt="Movie 2">
                <div class="movie-details">
                    <h3>Movie 2 Title</h3>
                    <p>Description of Movie 2.</p>
                </div>
            </div>
            <div class="movie">
                <img src="https://th.bing.com/th/id/OIP.XErkY_cQQbQ8y3D3NSpPsQAAAA?rs=1&pid=ImgDetMain" alt="Movie 2">
                <div class="movie-details">
                    <h3>Movie 2 Title</h3>
                    <p>Description of Movie 2.</p>
                </div>
            </div>
            <div class="movie">
                <img src="https://yt3.ggpht.com/a/AATXAJxcIZ8G3oCk8--aelM8MwXvMIcV6Ek4QZjmuQLC=s900-c-k-c0xffffffff-no-rj-mo" alt="Movie 2">
                <div class="movie-details">
                    <h3>Movie 2 Title</h3>
                    <p>Description of Movie 2.</p>
                </div>
            </div>

        </div>
    </section>

    <section>
        <h2>Popular Movies</h2>
        <div class="movie-container">
            <div class="movie">
                <img src="https://i.iheart.com/v3/url/aHR0cHM6Ly9tZWdhcGhvbmUuaW1naXgubmV0L3BvZGNhc3RzL2RkMjk1MDRjLWZhYzktMTFlYi05MTZlLWMzNTcwNGZhOWIwZC9pbWFnZS9NVC1Qb2QtTmV3LUhvbGUtMzAwMC5wbmc_aXhsaWI9cmFpbHMtMi4xLjImbWF4LXc9MzAwMCZtYXgtaD0zMDAwJmZpdD1jcm9wJmF1dG89Zm9ybWF0LGNvbXByZXNz" alt="Movie 3">
                <div class="movie-details">
                    <h3>Movie 3 Title</h3>
                    <p>Description of Movie 3.</p>
                </div>
            </div>

            <div class="movie">
                <img src="https://media.gettyimages.com/id/148000901/photo/people-watching-a-movie-at-a-theater.jpg?s=1024x1024&w=gi&k=20&c=NfsWVcWwHhZRabfnn5Ymb0CtzAt5AYU_mPAW9U60DwU=" alt="Movie 4">
                <div class="movie-details">
                    <h3>Movie 4 Title</h3>
                    <p>Description of Movie 4.</p>
                </div>
            </div>

        </div>
    </section>

    <section>
        <h2>Upcoming Movies</h2>
        <div class="movie-container">
            
            <div class="movie">
                <img src="https://koshertube.co.uk/wp-content/uploads/2022/05/meaningfull-people.jpg" alt="Movie 5">
                <div class="movie-details">
                    <h3>Movie 5 Title</h3>
                    <p>Description of Movie 5.</p>
                </div>
            </div>

            <div class="movie">
                <img src="https://th.bing.com/th/id/R.2c8a030f0223ce896d1b32b46b68b37d?rik=qy6H6CGv%2f3KCZg&pid=ImgRaw&r=0" alt="Movie 6">
                <div class="movie-details">
                    <h3>Movie 6 Title</h3>
                    <p>Description of Movie 6.</p>
                </div>
            </div>

        {{-- </div>  
        
        <div id="contact-modal">
            
    <h1>Contact Page</h1>

    <div class="container">
        <button onclick="openModal()">Open Contact Form</button>
    </div>

    <div class="modal" id="contactModal">
        <div class="modal-content">
            <h2>Contact Form</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>

            <button onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('contactModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('contactModal').style.display = 'none';
        }
    </script>
        </div> --}}
        
    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>





