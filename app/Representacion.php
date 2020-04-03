<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representacion extends Model
{
  protected $table = 'representacion';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'nombre_presi',
    'telefono_presi',
    'correo_presi',
    'nombre_vicep',
    'telefono_vicep',
    'correo_vicep',
    'nombre_geren',
    'telefono_geren',
    'correo_geren',
    'nro_var_tra',
    'nro_muj_tra',
    'nro_pers_perm',
    'nro_pers_even',
    'nro_jove',
    'socios_son',
    'nro_var_soc',
    'nro_muj_soc',
    'nro_pro_mie',
    'tot_bene',
    'nro_var_dir',
    'nro_muj_dir'
  ];

  protected $guarded=[

  ];
}
