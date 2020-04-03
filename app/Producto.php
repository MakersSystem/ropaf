<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'producto',
      'caracterisitcas',
      'prese_com',
      'veces_pro',
      'epoca',
      'vol_pro',
      'unid_ref',
      'equi_ur',
      'cant_dest',
      'cant_vend'
    ];

    protected $guarded=[

    ];
}
