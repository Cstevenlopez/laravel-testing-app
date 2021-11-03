<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table='proveedores';
    protected $fillable=[
        'nombres',
        'apellidos',
        'direccion',
        'ciudad',
        'numero_cedula',
        'numero_telefono',
        'terminos_pagos'
    ];
}
