<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css"/>
    <!-- Add your CSS styles or include external stylesheets here -->
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user )
                <tr>
                    <td>{{$user->id}}</td>
                  <td>{{$user->email}}</td>
                </tr>
                @endforeach
                <!-- Add more rows with user data as needed -->
            </tbody>
        </table>
        <form action="/logout" method="post">
            @csrf
        <button type="submit">logout</button>
        </form>
        {{-- <a href="@" class="logout-link">Logout</a>
        <a href="{{ route('logout') }}" class="logout-link">Logout</a> --}}
        <!-- Add your additional dashboard content here -->
    </div>

    <!-- Add your JavaScript or include external scripts here -->
</body>
</html>
