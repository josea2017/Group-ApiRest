<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre',
    	'codigo',
    	'descripcion',
    	'precio',
    	'cantidad',
    	'id_categoria',
    ];
}
