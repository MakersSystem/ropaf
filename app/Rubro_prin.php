<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro_prin extends Model
{
  protected $table = 'rubro_prin';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'agricola',
    'pecuario',
    'psicola',
    'avicola',
    'forestal'
  ];

  protected $guarded=[

  ];
}
