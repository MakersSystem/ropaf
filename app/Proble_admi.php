<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proble_admi extends Model
{
  protected $table = 'proble_admi';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'descripcion',
    'descripcion'
  ];

  protected $guarded=[

  ];
}
