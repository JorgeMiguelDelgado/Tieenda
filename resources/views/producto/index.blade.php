@extends('layout.layout')
@section('title','Pagina Principal')

@section('contenido')
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.3%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
/*.row:after {
  content: "";
  display: table;
  clear: both;
}*/

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}
.gg{
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<h1>Lista de dispositivos en venta</h1>
<button type="button" class="btn btn-outline-primary"><a class="nav-link" href="{{ route('producto.create') }}">Nuevo Producto</a></button>
    
        

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Imagen</th>  
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
            <th scope="row">{{$producto->id}}</th>
                <td> {{$producto->nombre}} </td>
                <td>{{$producto->descripcion}} </td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td> <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning">Editar</a>                    
                       </td>
             <!--   <td> <img src="images/{{$producto->ruta}}" alt="" width="150">-->
            </tr>
           @endforeach
        </tbody>
    </table>
    <h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <li> <a class="active" onclick="filterSelection('all')"> Productos</a></li>
</div>


    <div class="row">
    @foreach($productos as $producto)
<div class="column nature">
  
  <div class="content">
    
    <!--  <img src="/w3images/mountains.jpg" alt="{{$producto->file}}" style="width:100%">-->
      <h4>{{$producto->nombre}}</h4>
      <p>{{$producto->descripcion}}</p>
      <p>{{$producto->precio}}</p>
      <p>{{$producto->cantidad}}</p>
    </div>
    </div>
  @endforeach
  </div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
@endsection
