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
<nav>
    <a href="/notes">Home</a>
    <a href="/notes/create">Create</a>
</nav>
{{ $slot }}
</body>
</html>
