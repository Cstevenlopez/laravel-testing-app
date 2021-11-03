<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function index()
    {
        $proveedores = Proveedores::all();
        return view('proveedores.index')->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \redirect('/proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedores = new Proveedores();
        // if( $request->hasfile('foto')){
        // $foto = $request->file('foto');
        // $destinationPath = 'img/productors';
        // $fotoname = time() . '-' . $foto->getClientOriginalName();
        // $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        // $productor->foto = $destinationPath . $fotoname;
        // }
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'ciudad' => 'required',
            'numero_cedula' => 'required',
            'numero_telefono' => 'required',
            'terminos_pagos' => 'required'
        ]);
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');    
        $productor->direccion = $request->get('direccion');
        $productor->ciudad = $request->get('ciudad');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->terminos_pagos = $request->get('terminos_pagos');
        $productor->save();

        return redirect('/proveedores')->with('guardar','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $proveedores = Proveedores::find($id);
    return view('proveedores.edit')->with('proveedores', $proveedores);
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
        $proveedores=Proveedores::Find($id);
        // if ($request->hasfile('foto')){
        //     $foto=$request->file('foto');
        //     $destinationPath = 'img/productors/';
        //     $fotoname = time() . '-' . $foto->getClientOriginalName();
        //     $uploadSuccess = $request->file('foto')->move($destinationPath, $fotoname);
        //     $productor->foto = $destinationPath . $fotoname;
        // }
        $productor->nombres = $request->get('nombres');
        $productor->apellidos = $request->get('apellidos');    
        $productor->direccion = $request->get('direccion');
        $productor->ciudad = $request->get('ciudad');
        $productor->numero_cedula = $request->get('numero_cedula');
        $productor->numero_telefono = $request->get('numero_telefono');
        $productor->terminos_pagos = $request->get('terminos_pagos');
        $productor->save();

        return redirect('/proveedores')->with('editar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores = Proveedores::find($id);
        $proveedores->delete();

        return redirect('/proveedores')->with('eliminar','ok');
    }
}
