<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proble_repre extends Model
{
  protected $table = 'proble_repre';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'descripcion'
  ];

  protected $guarded=[

  ];
}
