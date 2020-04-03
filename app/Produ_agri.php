<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produ_agri extends Model
{
  protected $table = 'produ_agri';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'pro',
    'sup_cul',
    'pro_soc',
    'ren_soc',
    'cant_entr',
    'cant_vend',
    'prec_cult'
  ];

  protected $guarded=[

  ];
}
