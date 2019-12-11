<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  return view('venta.index', [
    'ventas'=>Venta::get()

  ]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Venta $venta)
    {
        return view('venta.create', [
            'venta' => new Venta
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
        
        Venta::create($fields);
        return redirect()->route('venta.index')->with('status','Registro Exitoso.');
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
    public function edit(Venta $venta)
    {
        return view('venta.edit',[
            'venta'=>$venta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Venta $venta)
    {

        $fields= request()->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'cantidad'=>'required',
        ]);
        $venta->update($fields);
        return redirect()->route('venta.index')->with('status','Editado con éxito');

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
