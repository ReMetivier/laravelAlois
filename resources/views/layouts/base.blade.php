<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
    <title>@yield('title')</title>
</head>
<body>
<header>

    @include('layouts.navbar')

</header>
<main class="center">
    @yield('content')
</main>
<footer></footer>
</body>
</html>
