<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demanda extends Model
{
  protected $table = 'demanda';
  protected $primarykey = 'id';
  public $timestamps = true;

  protected $fillable = [
    'financ',
    'demanda',
    'tipo_serv',
    'para_q'
  ];

  protected $guarded=[

  ];
}
