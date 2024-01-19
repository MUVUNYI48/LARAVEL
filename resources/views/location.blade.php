{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website - Choose Location</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Movie Website - Choose Location</h2>

        <form action="#" method="post">
            <label for="location">Select Your Preferred Location:</label>
            <select name="location" id="location" required>
                <option value="" disabled selected>Select a location</option>
                <option value="cinema1">Cinema 1</option>
                <option value="cinema2">Cinema 2</option>
                <option value="cinema3">Cinema 3</option>
                <!-- Add more options based on your actual locations -->
            </select>

            <button type="submit" class="submit-button">Continue</button>
        </form>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website - Choose Location</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        #cinema-info {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Movie Website - Choose Location</h2>

        <form action="{{ url('/chooseLocation') }}" method="POST" id="location-form">

            @csrf
            @method('POST')
            <label for="location">Select Your Preferred Location:</label>
            <select name="location" id="location" required onchange="showCinemaInfo()">
                <option value="" disabled selected>Select a location</option>
                <option value="cinema1">Cinema 1</option>
                <option value="cinema2">Cinema 2</option>
                <option value="cinema3">Cinema 3</option>
                <!-- Add more options based on your actual locations -->
            </select>

            <button type="submit" class="submit-button">Continue</button>
        </form>

        <div id="cinema-info">
            <!-- Information about the chosen cinema will be displayed here -->
        </div>
    </div>

    <script>
        function showCinemaInfo() {
            var selectedLocation = document.getElementById('location').value;
            var cinemaInfoDiv = document.getElementById('cinema-info');

            // Reset the content
            cinemaInfoDiv.innerHTML = '';

            // Display information based on the selected location
            switch (selectedLocation) {
                case 'cinema1':
                    cinemaInfoDiv.innerHTML = '<p><strong>Cinema 1 Information:</strong></p><p>Address: 123 Main Street</p><p>Phone: (555) 123-4567</p>';
                    break;
                case 'cinema2':
                    cinemaInfoDiv.innerHTML = '<p><strong>Cinema 2 Information:</strong></p><p>Address: 456 Oak Avenue</p><p>Phone: (555) 987-6543</p>';
                    break;
                case 'cinema3':
                    cinemaInfoDiv.innerHTML = '<p><strong>Cinema 3 Information:</strong></p><p>Address: 789 Elm Street</p><p>Phone: (555) 567-8901</p>';
                    break;
                // Add more cases based on your actual locations
            }

            // Show the cinema information div
            cinemaInfoDiv.style.display = 'block';
        }
    </script>
</body>
</html>
