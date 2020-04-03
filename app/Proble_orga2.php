<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proble_orga2 extends Model
{
  protected $table = 'proble_orga2';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'descripcion',
    'codigo'
  ];

  protected $guarded=[

  ];
}
