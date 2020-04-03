<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoFinal extends Model
{
    //
    protected $table = 'producto_final';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'id',
      'pro_nombre',
      'pro_imagen',
      'pro_descripcion'
    ];

    protected $guarded=[

    ];
}
