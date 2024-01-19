<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa; /* Set a background color for the entire page */
}

.container-login {
    margin: 100px auto;
    width: 400px;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    padding: 20px;
    border-radius: 10px;
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
    box-sizing: border-box;
    border: 1px solid #ced4da; /* Add a border to the input fields */
    border-radius: 5px;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.success-msg,
.fail-msg {
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
}

.success-msg {
    background-color: #d4edda;
    color: #155724;
}

.fail-msg {
    background-color: #f8d7da;
    color: #721c24;
}

    </style>
</head>
<body>
   <div class="container-login">

       <form action="{{ route('login') }}" method="POST">
        @if(Session::has('success'))
        <div class="success-msg">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="fail-msg">{{Session::get('fail')}}</div>
        @endif
        @csrf
           <label for="username">Username:</label>
           <input type="text" id="username" name="email" value="{{old('email')}}" required>
           <span>@error('email'){{$message}}@enderror</span>

           <label for="password">Password:</label>
           <input type="password" id="password" name="password" required>
           <span>@error('email'){{$message}}@enderror</span>
           
           <button type="submit">Login</button>
       </form>
       <br/><br/>
       <p>Already have an account? <a href="/signup">signup</a></p>
    </div>    
</body>
</html>
