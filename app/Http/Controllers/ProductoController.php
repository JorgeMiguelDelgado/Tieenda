<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticuloFormRequest;
use DB;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function f(){
        return view('edicion',[

            'productos'=>Producto::get(),
            'categorias'=>Categoria::get(),
        ]);
    }
    public function index()
    {
  return view('producto.index', [
    'productos'=>Producto::get(),
    'categorias'=>Categoria::get()

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
            'categorias' => Categoria::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        $riot=new Producto;
        $riot->codigo =$request->get('codigo');
        $riot->nombre =$request->get('nombre');
        $riot->cantidad =$request->get('cantidad');
        $riot->id_categoria =$request->get('id_categoria');
        $riot->email =$request->get('email');
        $riot->descripcion =$request->get('descripcion');
        
        $riot->estado =$request->get('estado');
        
       

        if ($request->hasFile('imagen')){
            $files=$request->file('imagen');
            $files->move(public_path().'/images/',$files->getClientOriginalName());
               $riot->imagen=$files->getClientOriginalName();
           }
           $riot->save();
           
        return redirect()->route('producto.index');
   /*$fields=request()->validate([
        'codigo'=>'required',
        'nombre'=>'required',
        'cantidad'=>'required',
        'id_categoria'=>'required',
        'email'=>'required',
        'descripcion'=>'required',
        'imagen'=>'required',
        'estado'=>'required'
        ]);
     
      
        
        Producto::create($fields);
      */
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
        'email'=>'required',
        'descripcion'=>'required',
        
        'estado'=>'required'
            
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