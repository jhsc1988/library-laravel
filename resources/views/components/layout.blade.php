<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" href="images/favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Knjižnica - laravel</title>
</head>
<body class="mb-48">

<nav class="navbar navbar-expand-lg navbar-light bg-light c-navbar">
    <a class="navbar-brand" href="#">Knjižnica</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item active ml-auto">
                <a class="nav-link mr-2" href="#">Početna <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Menu1</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Menu2</a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto order-lg-last">

            <li class="nav-item">
                <a href="/register" class="nav-link hover:text-laravel"><i class="fa-solid fa-user-plus"></i>
                    Register</a>
            </li>

            <li class="nav-item">
                <a href="/login" class="nav-link hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>

        </ul>

    </div>
</nav>

<main>
    {{$slot}}
</main>

<footer class="fixed-bottom w-full flex items-center justify-start font-bold bg-light c-foot" id="f1">
    <p>© 2023 Jasmin Husić</p>
</footer>
</body>
</html>
