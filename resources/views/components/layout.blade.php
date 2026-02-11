@props(
    ['title' => 'Homez']
)
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
</head>
<body>
@auth
<nav>
    <a href="/notes">Home</a>
    <a href="/notes/create">Create</a>

    <a href="/logout">LogOut</a>
</nav>
@endauth
@guest
    <a href="/register">Register</a>
    <a href="/login">LogIn</a>
@endguest
{{ $slot }}
</body>
</html>
