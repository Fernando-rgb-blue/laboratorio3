<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <h1>Home</h1>
        <li><a href="/">Home</a></li>
        <li><a href="nosotros">Nosotros</a></li>
        <li><a href="servicios">Servicios</a></li> <li><a href="contacto">Contacto</a></li>
        </ul>   
</body>
</html>

@yield('content')
