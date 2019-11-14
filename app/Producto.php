<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='Productos';

    protected $fillable=['nombre', 'precio','file', 'descripcion', 'cantidad'];
}
