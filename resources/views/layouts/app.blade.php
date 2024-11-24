<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Go Blog App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        nav {
            background: linear-gradient(90deg, #ff5733, #ffc300, #28a745);
            color: #fff;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 15px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff5733;
            text-align: center;
        }
        .empty-message {
            border: 2px solid #ffc300;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            background-color: #fff8e6;
        }
        .empty-message a {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
        }
        .empty-message a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <div>
            <strong>APALAH</strong>
        </div>
        <div>
            <a href="{{ route('blogs.index') }}">List Blogs</a>
            <a href="{{ route('blogs.create') }}">Create Blog</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
