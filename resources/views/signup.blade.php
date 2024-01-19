<!-- resources/views/signup.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Sign Up</title>
    <style>
        .success-msg{
            background-color: rgb(1, 32, 1);
            color: green
        }
        .fail-msg{
            color: rgb(254, 6, 6)
        }
    </style>
</head>
<body>
    <center>
        <section class="signup-container">
            <h1>Sign Up</h1>
            <br/><br/>
            <form action="{{ route('register') }}" method="POST">
                @if(Session::has('success'))
                <div class="success-msg">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="fail-msg">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <label for="username">email:</label>
                <input type="text"  name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Sign Up</button>
            </form>
            <br/><br/>
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </section>
    </center>
</body>
</html>
