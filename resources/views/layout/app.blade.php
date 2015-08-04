<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shame UK drivers"/>
    <title>Name & Shame</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">N&S</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p>Created by <a href="http://www.votemike.co.uk/">Michael Gwynne</a></p>
    </div>
</footer>

</body>
</html>