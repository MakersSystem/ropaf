<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
  protected $table = 'certificacion';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'tipo',
    'prom_super',
    'pri_cul'
  ];

  protected $guarded=[

  ];
}
