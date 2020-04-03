<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proble_orga extends Model
{
  protected $table = 'proble_orga';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'descripcion',
    'codigo'
  ];

  protected $guarded=[

  ];
}
