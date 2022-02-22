<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/about">About</a></li>
            <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>