<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','My website')</title>
</head>
<body>
    <h1><a href="/">welcome</a> | <a href="/about">about</a> | <a href="/contact">contact</a></h1>
    <hr>
    @yield('content')
    <h4>By Dream</h4>

</body>
</html>
