<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\API\ProveedoresController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('proveedores',[ProveedoresController::class,'index']);
Route::post('proveedores',[ProveedoresController::class,'store']);
Route::put('proveedores/{proveedores}',[ProveedoresController::class,'update']);
Route::get('proveedores/{proveedores}',[ProveedoresController::class,'show']);
Route::delete('proveedores/{proveedores}',[ProveedoresController::class,'destroy']);
