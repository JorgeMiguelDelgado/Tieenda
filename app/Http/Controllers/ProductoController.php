<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  return view('producto.index', [
    'productos'=>Producto::get(),
    'categorias'=>Categoria::get(),
    'users'=>User::get()

    ]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create', [
            'categorias' => Categoria::get(),
            'users'=>User::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
      $fields=request()->validate([
        'codigo'=>'required',
        'nombre'=>'required',
        'cantidad'=>'required',
        'id_categoria'=>'required',
        'id_usuario'=>'required',
        'descripcion'=>'required',
        'imagen'=>'required',
        'estado'=>'required'
        
            
        ]);
        
        Producto::create($fields);
        return redirect()->route('producto.index')->with('status','Registro Exitoso.');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('producto.edit',[
            'producto'=>$producto,
            'categorias'=>Categoria::get(),
            'users'=>User::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Producto $producto)
    {

        $fields= request()->validate([
            'codigo'=>'required',
            'nombre'=>'required',
            'cantidad'=>'required',
            'id_categoria'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
            'estado'=>'required',
            
        ]);
        $producto->update($fields);
        return redirect()->route('producto.index')->with('status','Editado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}