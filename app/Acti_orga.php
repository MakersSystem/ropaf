<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acti_orga extends Model
{
  protected $table = 'acti_orga';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'tuberculos',
    'cafetaleros'
  ];

  protected $guarded=[

  ];
}
