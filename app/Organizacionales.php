<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacionales extends Model
{
  protected $table = 'organizacionales';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'fech_funda',
    'anio_afili',
    'perso_juri',
    'organi',
    'esta_regl',
    'manu_func',
    'nit',
    'rau',
    'fund_empr',
    'targ_empr',
    'regi_sani',
    'sello_spg',
    'certi_orga',
    'sello_seg'
  ];

  protected $guarded=[

  ];
}
