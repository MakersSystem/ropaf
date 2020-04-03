<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
  protected $table = 'administrativo';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'sis_cont',
    'man_func',
    'cal_cost',
    'inven',
    'man_proc',
    'pla_nego',
    'poa',
    'pei',
    'imp_dia'
  ];

  protected $guarded=[

  ];
}
