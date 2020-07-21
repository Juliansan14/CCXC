<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    protected $table='productos';

    protected $fillable=['id','categoria_id', 'nombre_producto', 'precio', 'codigo' ];
}
