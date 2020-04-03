<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_vend extends Model
{
    //
    protected $table = 'producto_vend';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'producto',
      'finca_resc',
      'centr_comp',
      'feria',
      'mercado',
      'tienda',
      'otro',
    ];

    protected $guarded=[

    ];
}
