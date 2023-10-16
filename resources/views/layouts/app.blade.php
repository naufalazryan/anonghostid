<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="We AnonGhost Indonesian" />
    <link rel="icon" href="{{ asset('images/logo.jpeg') }}">
    <link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <title>AnonGhost ID</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
    </header>

    <nav>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>
