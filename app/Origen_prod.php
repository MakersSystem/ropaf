<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origen_prod extends Model
{
  protected $table = 'origen_prod';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'tradicional',
    'convencional',
    'agroindustrial',
    'trad_tran',
    'ecologico'
  ];

  protected $guarded=[

  ];
}
