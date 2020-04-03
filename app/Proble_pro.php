<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proble_pro extends Model
{
  protected $table = 'proble_pro';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'descripcion'
  ];

  protected $guarded=[

  ];
}
