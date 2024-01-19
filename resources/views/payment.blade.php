<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website - Payment Form</title>
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

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
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

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <div class="container">
        <h2>Movie Website - Payment Form</h2>

        <form action="{{ url('/proccess-payment') }}" method="POST">
            @csrf
            <label for="card-holder">Cardholder's Name:</label>
            <input type="text" id="card_holder" name="card_holder" required>

            <label for="card-number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry-date">Expiry Date:</label>
            <select id="expiry-date" name="expiry_date" required>
                <option value="" disabled selected>Select expiry date</option>
                <!-- Add options for expiry dates -->
            </select>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="submit" class="submit-button">Submit Payment</button>
            @if(session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
               <h1>sucess message</h1>
            </div>
         @endif
        </form>
          
    </div>
    <script>
        // Dynamically populate expiry date options
        document.addEventListener('DOMContentLoaded', function () {
            var expiryDateSelect = document.getElementById('expiry-date');

            // Example: Populate options for the next 10 years
            var currentYear = new Date().getFullYear();
            for (var i = 0; i < 10; i++) {
                var option = document.createElement('option');
                var year = currentYear + i;
                option.value = year;
                option.text = year;
                expiryDateSelect.add(option);
            }
        });
    </script>
</body>
</html>
