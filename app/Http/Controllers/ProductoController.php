<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
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
    'productos'=>Producto::get()

  ]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Producto $producto)
    {
        return view('producto.create', [
            'producto' => new Producto
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'cantidad'=>'required',
           
            
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
            'producto'=>$producto
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'cantidad'=>'required',
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
