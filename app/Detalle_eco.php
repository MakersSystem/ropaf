<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_eco extends Model
{
  protected $table = 'detalle_eco';
  protected $primarykey = 'id';
  public $timestamps = true;

  protected $fillable = [
    'detalle',
    'precio',
    'nro_soc',
    'pro_uni'
  ];

  protected $guarded=[

  ];
}
