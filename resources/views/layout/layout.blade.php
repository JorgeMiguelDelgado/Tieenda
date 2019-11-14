<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
body {margin:0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<ul>
    <li><a class="active" href="#">GEORGESTORE</a></li>
    <li><a  href="{{ url('/') }}">Inicio</a></li>
    <li><a href="#">Listas</a></li>
    <li><a href="#">Soporte</a></li>
    <li><a href="{{ route('register') }}">@yield('Registro')</a></li>
    <li><a href="{{ route('login') }}">@yield('Login')</a></li>
    <li><a href="#">@yield('perfil')</a></li>
    
    </ul>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1 class="navbar-brand">@yield('titulo')</h1>
    <div class="collapse navbar-collapse">
    <div class="navbar-nav">
    
    </div>
    </div>
    </nav>
    <div class="container">

        @yield('contenido')
        
    </div>
    </div>
</body>
</html>