<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
  protected $table = 'mercado';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'norm_san',
    'tama',
    'mate_pri',
    'entr_opr',
    'cant',
    'empa',
    'etiq',
    'dura_pro'
  ];

  protected $guarded=[

  ];
}
