<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
   
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

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

a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
input[type=submit], input[type=file]{
  
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
    <li><a  href="{{ url('/producto') }}">Inicio</a></li>
    <li><a  href="{{ url('/producto/create') }}">Ofrecer un producto</a></li>
    <li><a href="http://lolapi.test">League Of Legends</a></li>
    <li><a href="{{ url('/contact') }}">Soporte</a></li>
    <li><a href="{{url('/edicion')}}">Editar mi producto</a></li>
    @auth
        <li >
          <a class="nav-link" href="#" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">Cerrar sesión</a>             
        </li>                                                
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>             
                        </li>
                    @endauth
    <li><a href="#">@yield('perfil')</a></li>
    <li><a href=""></a></li>
    
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