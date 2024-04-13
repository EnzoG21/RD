<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #f9fafb;
            color: #ffffff; /* Changed text color to white */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 0;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        .nav-link {
            padding: 10px 20px;
            background-color: #FF2D20;
            color: #ffffff;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .nav-link:hover {
            background-color: #ff4637; /* Darker shade of red on hover */
        }
        main {
            padding: 40px 0;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #ffffff; /* Changed text color to white */
        }
        p {
            font-size: 1.125rem;
            line-height: 1.75rem;
            color: #ffffff; /* Changed text color to white */
        }
        footer {
            padding: 40px 0;
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.7); /* Changed text color to white */
        }
        .dark-mode {
            background-color: #121212;
            color: rgba(255, 255, 255, 0.5);
        }
        .selection-style {
            background-color: #FF2D20;
            color: #fff;
        }
    </style>
</head>
<body class="container dark-mode">
    <header>
        <div></div>
        <nav>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
    </header>
    <main>
        <h1>Welcome to the EHU Vikings Kit Management System</h1>
        <p>Manage or Log Broken/Lost Kit efficiently with our user-friendly system.</p>
    </main>
    <footer>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>
</html>
