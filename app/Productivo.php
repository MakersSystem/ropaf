<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productivo extends Model
{
  protected $table = 'productivo';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'acti_prin_orga',
    'actividades_ingre',
  ];

  protected $guarded=[

  ];
}
