<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" href="images/favicon.ico"/>
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
<body class="m-width-500">
<nav class="flex items-center justify-between flex-wrap p-2 b-shadow bg-nav fixed top-0 left-0 right-0 z-20">
    <div class="flex items-center flex-shrink-0  mr-6 nav">
        <a class="text-lg font-bold nav" href="/">Knjižnica</a>
    </div>
    <div class="block lg:hidden">
        <button id="menu-toggle"
                class="flex items-center px-3 py-2 border rounded text-black-200 border-black-400 hover:text-red hover:border-red">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div id="menu" class="w-full hidden flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm nav">
            @php
                if (auth()->check()) {
                echo '<a href="/my-reservations" class="block mt-4 lg:inline-block lg:mt-0 mr-4">Moje rezervacije</a>';
                }
            @endphp
        </div>
        <div class="text-sm nav">
            @php
                if (auth()->check() && auth()->user()->isAdmin()) {
                echo '<a href="/listings/create" class="block mt-4 lg:inline-block lg:mt-0 mr-4" style="color: red;">Upis nove knjige</a>';
                }
            @endphp
        </div>

        <div class="text-sm lg:flex-grow nav">
            @php
                if (auth()->check() && auth()->user()->isAdmin()) {
                echo '<a href="/reservations" class="block mt-4 lg:inline-block lg:mt-0 mr-4" style="color: red;">Sve rezervacije</a>';
                }
            @endphp
        </div>
        <div class="nav">
            @auth
                <span
                    class="font-bold"> Pozdrav {{ auth()->user()->name }}<?php if (auth()->user()->isAdmin()) echo '<span style="color: rgba(239, 68, 68, 1);"> (Admin)</span>'; ?></span>

                <form class="inline" method="post" action="/logout">
                    @csrf
                    <button type="submit" class="block mt-4 lg:inline-block lg:mt-0 mr-4">
                        <i class="fa-solid fa-door-closed"></i> Odjava
                    </button>
                </form>

            @else
                <a href="/register" class="block mt-4 lg:inline-block lg:mt-0">
                    <i class="fa-solid fa-user-plus"></i>
                    Registracija
                </a>
                <a href="/login" class="block mt-4 lg:inline-block lg:mt-0">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Prijava
                </a>
            @endauth
        </div>
    </div>
</nav>
<main class="pb-8">
    {{$slot}}
</main>

<footer class="footer bg-nav f-shadow">
    <div class="copyright">
        © 2023 Jasmin Husić
    </div>
</footer>
<x-flash-message/>
<div class="m-bottom-80"></div>

</body>
</html>

<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        var menu = document.getElementById("menu");
        menu.classList.toggle("hidden");
    });
</script>
