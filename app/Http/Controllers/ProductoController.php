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
        
        $productos= Producto::All();
        return view('Principal.Principal', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $producto= Producto::get();
        return view('Principal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        Producto::create(request()->all());
        return redirect()->route('producto');
     
        $producto=new Producto;
        if($request->hashFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $producto->avatar =$name;
        $producto->slug=time().$request->input('name');
        $producto->save();

        
     /*   $entrada=$request->all();
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $entrada['file']=$nombre;
        }
        Producto::create($entrada);
        
        return redirect()->route('producto');
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
        return view('producto.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto->fill($requesst-except('avatar'));
        if($request->hasFile('avatar')){
            $file= $request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $teacher->avatar= $name;
            $file->move(public_path().'/images/', $name);

        }
        $producto->save();
        return 'Updated';

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
