<?php

namespace App\Http\Controllers\API;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarProveedoresRequest;
use App\Http\Requests\GuardarProveedoresRequest;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedores::query()->paginate();
        return response($proveedores, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProveedoresRequest $request)
    {
        Proveedores::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Proveedor guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedores)
    {
        return response()->json([
            'res'=>true,
            'data'=>$proveedores
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarProveedoresRequest $request,Proveedores $proveedores)
    {
        $proveedores->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor actualizado exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedores $proveedores)
    {
        $proveedores->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor Eliminado exitosamente'
        ]);
    }
}